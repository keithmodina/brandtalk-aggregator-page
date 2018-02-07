var Featured = function(){

    var html = '';
    var counter = 0;
    var arrayCounter1 = [1,4,7,10,13,16,19];
    var arrayCounter2 = [2,5,8,11,14,17,20];
    
    var initFeatured = function(latestData){
        new Http().ajax({url:is_live ? 'https://s3.amazonaws.com/data3.gmanews.tv/entertainment/data/brandtalk/brandtalkdata/featured.gz' : 'http://s3-ap-southeast-1.amazonaws.com/test.gmanetwork.com/entertainment/uat/data/brandtalk/brandtalkdata/featured.gz'})
        .then(function(data){
            if(!latestData){
                if(Object.keys(data.featured_data).length == 0){
                    new Latest().IfemptyFeatured();
                } else {
                        new Latest().initLatestStories(data.featured_data);
                        if(window.innerWidth <= 768){
                            displayMobileFeatured(data);
                        }
                        else{
                            displayDesktopFeatured(data);
                        }
                }
                
            } else {
                if(window.innerWidth <= 768){
                    displayMobileFeaturedFromLatest(latestData);
                }
                else{
                    displayDesktopFeaturedFromLatest(latestData);
                }
            } 
            $('.carousel-inner').append(html);
            $('.item:first').addClass('active');
          
             $('#media').carousel({
              pause: true,
              interval: false,
              wrap: false
            });
        }).catch(function(e){
            console.log(e);
        })
    }

    var displayMobileFeatured = function(data){
        for(var k=0;k<Object.keys(data.featured_data).length;k++) {
            html += '<div class="item">' +
                        '<div class="row">';
               for(var j=0;j<1;j++){ 
                html += '<div class="col-md-4 hover-ef">' +
                          '<a class="thumbnail featured-thumb" href="'+data.featured_data[k].featured_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+data.featured_data[k].image+'">' +
                          '<div class="featured-title">'+data.featured_data[k].title+'</div></a>' +
                          '</div>';
                }
                html += '</div>';
                html += '</div>';

              }
              html += '</div>';
              
            if($.inArray(Object.keys(data.featured_data).length, arrayCounter1) >= 0){
                new Latest().mobileNotDivisibleBythree(2);
            } 
            else if ($.inArray(Object.keys(data.featured_data).length, arrayCounter2) >= 0){
                new Latest().mobileNotDivisibleBythree(1);
            } 
            else {
                new Latest().IsFeaturedDivisibleByThree();
            }    
    }

    var displayDesktopFeatured = function(data){
        
        for(var k=0;k<Object.keys(data.featured_data).length / 3;k++) {
            html += '<div class="item">' +
                        '<div class="row">';
            if(Object.keys(data.featured_data).length - counter >= 3){
              for(var i = counter;i<counter+3;i++){

                html += '<div class="col-md-4 hover-ef">' +
                      '<a class="thumbnail featured-thumb" href="'+data.featured_data[i].featured_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+data.featured_data[i].image+'">' +
                      '<div class="featured-title">'+data.featured_data[i].title+'</div></a>' +
                      '</div>';
              }
            }else {
              for(var i = counter;i<counter + Object.keys(data.featured_data).length - counter;i++){
                html += '<div class="col-md-4 hover-ef">' +
                      '<a class="thumbnail featured-thumb" href="'+data.featured_data[i].featured_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+data.featured_data[i].image+'">' +
                      '<div class="featured-title">'+data.featured_data[i].title+'</div></a>' +
                      '</div>';
              }
            }
            counter +=3;
            html += '</div>' + 
            '</div>';
        }
        
        if($.inArray(counter + Object.keys(data.featured_data).length - counter, arrayCounter1) >= 0){
            new Latest().IfFeaturedNotDividedToThree(2);
        } 
        else if ($.inArray(counter + Object.keys(data.featured_data).length - counter, arrayCounter2) >= 0){
            new Latest().IfFeaturedNotDividedToThree(1);
        } 
        else {
            new Latest().IsFeaturedDivisibleByThree();
           
        }    
    }

    var displayMobileFeaturedFromLatest = function(data){
        for(var k=0;k<Object.keys(data).length;k++) {
            html += '<div class="item">' +
                        '<div class="row">';
               for(var j=0;j<1;j++){ 
                html += '<div class="col-md-4 hover-ef">' +
                          '<a class="thumbnail featured-thumb" href="'+ base_url + data[k].article_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+ (!isEmpty(data[k].photos) ?  data[k].photos.base_url2 + data[k].photos.base_filename : base_url + 'res/images/plain.jpg')+'">' +
                          '<div class="featured-title">'+data[k].title+'</div></a>' +
                          '</div>';
                }
                html += '</div>' + 
                            '</div>';
              }
    }

    var displayDesktopFeaturedFromLatest = function(data){
        for(var k=0;k<Object.keys(data).length / 3;k++) {
            html += '<div class="item">' +
                        '<div class="row">';
            if(Object.keys(data).length - counter >= 3){
              for(var i = counter;i<counter+3;i++){

                html += '<div class="col-md-4 hover-ef">' +
                      '<a class="thumbnail featured-thumb" href="'+ base_url + data[i].article_url+'?brandtalk_featuredposts'+'?brandtalk_featuredposts'+'"><img alt="" src="'+(!isEmpty(data[k].photos) ? data[k].photos.base_url2 + data[k].photos.base_filename : base_url + 'res/images/plain.jpg')+'">' +
                      '<div class="featured-title">'+data[i].title+'</div></a>' +
                      '</div>';
              }
            }else {

              for(var i = counter;i<counter + Object.keys(data).length - counter;i++){

                html += '<div class="col-md-4 hover-ef">' +
                      '<a class="thumbnail featured-thumb" href="'+base_url + data[i].article_url+'?brandtalk_featuredposts'+'"><img alt="" src="'+data.featured_data[i].image+'">' +
                      '<div class="featured-title">'+data[i].title+'</div></a>' +
                      '</div>';
              }
            }
            counter +=3;
            html += '</div>' + 
                    '</div>';
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
        initFeatured : initFeatured
    }
}