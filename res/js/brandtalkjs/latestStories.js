var Latest = function(){
    var url = is_live ? 'http://www.gmanetwork.com/news/' : 'http://www.tgmanetwork.com/news/';
    var html = '';
    var featuredHtml = '';
    var featuredArray = [];
    var $container = null;
    var iso = null;
    var counter = null;

    var initLatestStories = function(featured){
            checkIfNotInFeatured(featured);
    }

    var displayLatest = function(data){
        
        for(var i = 0;i<Object.keys(data).length;i++){
            if($.inArray(data[i].id, featuredArray) == -1){
                html += ' <div class="isotope-item hover-ef">' +
                '<a href="'+ url + data[i].article_url  +'?brandtalk_lateststories" title="'+ data[i].title + '">' +
                '<div class="box" style="background: url(' + (!isEmpty(data[i].photos) ? data[i].photos.base_url2 + data[i].photos.base_filename : "") + ') center no-repeat; background-size:cover; background-color:#ffffff;">'+
                '<div class="title-wrapper">' +
                '<div class="title">'+ data[i].title +'</div>' +
                '</div>' +
                '</div>' +
                '</a>' +
            '</div>';
            }
            }
            $('#latest').append(html);
            $('.isotope-item:first').addClass('text-box');
            initIsotope();
    }

    var IsFeaturedDivisibleByThree = function(){
        new Http().ajax({url: data_url + 'widgets/brandtalk/brandtalk_microsite/home.gz'})
        .then(function(data){
            displayLatest(data);
        })
    }

    var IfemptyFeatured = function(){
            new Http().ajax({url: data_url + 'widgets/brandtalk/brandtalk_microsite/home.gz'})
                .then(function(data){
                    new Featured().initFeatured(data.slice(0, 3));
                    checkIfNotInLatestToLatest(data.slice(0, 3));
                    displayLatest(data);
            })
    }

    var IfFeaturedNotDividedToThree = function(val){
      
        new Http().ajax({url: data_url + 'widgets/brandtalk/brandtalk_microsite/home.gz'})
        .then(function(data){
            var obj = data.slice(0,val);

            for(var i=0;i<Object.keys(obj).length;i++){
             featuredHtml += '<div class="col-md-4 hover-ef">' +
                '<a class="thumbnail featured-thumb" href="'+url + obj[i].article_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+ (!isEmpty(obj[i].photos) ?  obj[i].photos.base_url2 + obj[i].photos.base_filename : base_url + 'res/images/plain.jpg')+'">' +
                '<div class="featured-title">'+obj[i].title+'</div></a>' +
                '</div>';
            }
            checkIfNotInLatestToLatest(obj);
            displayLatest(data);
            $('.carousel-inner .row').last().append(featuredHtml);
        
        })
    }

    var mobileNotDivisibleBythree = function(val) {
        new Http().ajax({url: data_url + 'widgets/brandtalk/brandtalk_microsite/home.gz'})
        .then(function(data){
            var obj = data.slice(0,val);

            for(var i=0;i<Object.keys(obj).length;i++){
             featuredHtml += '<div class="item">' +
             '<div class="row">' +
             '<div class="col-md-4 hover-ef">' +
                '<a class="thumbnail featured-thumb" href="'+url + obj[i].article_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+ (!isEmpty(obj[i].photos) ?  obj[i].photos.base_url2 + obj[i].photos.base_filename : base_url + 'res/images/plain.jpg')+'">' +
                '<div class="featured-title">'+obj[i].title+'</div></a>';
                featuredHtml += '</div>';
                for(var j=0;j<1;j++){ 
                    featuredHtml += '</div>';
                    featuredHtml += '</div>';
                }
            }
            checkIfNotInLatestToLatest(obj);
            displayLatest(data);
            $('.carousel-inner').last().append(featuredHtml);
        
        })
    }

    var checkIfNotInFeatured = function(featured){

        for(var i = 0;i<Object.keys(featured).length;i++){
            var segments = featured[i].featured_url.split( '/' );
            var featuredId = segments[6];
            featuredArray.push(featuredId);
          }
    }

    var checkIfNotInLatestToLatest = function(letestData){

        for(var i = 0;i<Object.keys(letestData).length;i++){
            var segments = letestData[i].article_url.split( '/' );
            var featuredId = segments[2];
            featuredArray.push(featuredId);
          }
    }

    var initIsotope = function(){
         // init Isotope
         $container = $('.isotope-items-wrap').isotope({
            itemSelector: '.isotope-item',
                 transitionDuration: '0.5s',
                 masonry: {
                    columnWidth: '.grid-sizer',
                    isFitWidth: true,
                 }
          });
          

          var initShow = window.innerWidth <= 768 ? 6 : 12; //number of images loaded on init & onclick load more button
          counter = initShow; //counter for load more button
          loadMoreQueryCounter = 1;
          iso = $container.data('isotope'); // get Isotope instance
          
          $container.after('<div class="margin-top-30 text-center"><button id="load-more" class="btn margin-top-5"> LOAD MORE </button></div>');
          loadMore(initShow); //execute function onload

          
          $("#load-more").click(function() {
            if ($('#filters').data('clicked')) {
    
              counter = initShow;
              j$('#filters').data('clicked', false);
            } else {
              counter = counter;
            };
      
            counter = counter + initShow;
      
            loadMore(counter);
            
            var params = {page_title: document.title, page_overriden: window.location.href + loadMoreQueryCounter};
            CUSTOM_ANALYTICS.ga_send_event(params);

            loadMoreQueryCounter++;
          });
    }

    var loadMore = function(toShow) {
            $container.find(".hidden").removeClass("hidden");

            if(iso != undefined){
                var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
                    return item.element;
                });
        
                $(hiddenElems).addClass('hidden');
                $container.isotope('layout');
        

                if (hiddenElems.length == 0) {
                    $("#load-more").hide();
                    $('.all-content').css("display","block");
                } 
                else {
                    $("#load-more").show();
                };
            }

        }

    var isEmpty = function(obj) {
        for(var key in obj) {

          if(obj.hasOwnProperty(key))
            return false;
          }

        return true;
      }

    return {
        initLatestStories: initLatestStories,
        IfemptyFeatured: IfemptyFeatured,
        IfFeaturedNotDividedToThree: IfFeaturedNotDividedToThree,
        IsFeaturedDivisibleByThree: IsFeaturedDivisibleByThree,
        checkIfNotInFeatured: checkIfNotInFeatured,
        mobileNotDivisibleBythree:mobileNotDivisibleBythree
    }
}