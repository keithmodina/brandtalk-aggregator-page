$(document).ready(function(){

    var About = function(){
        new Http().ajax({url:is_live ? 'https://s3.amazonaws.com/data3.gmanews.tv/entertainment/data/brandtalk/brandtalkdata/about.gz' : 'http://s3-ap-southeast-1.amazonaws.com/test.gmanetwork.com/entertainment/uat/data/brandtalk/brandtalkdata/about.gz'})
        .then(function(data){
            if(data.about_duration['0'] != undefined && data.about_duration['0'] != ''){
                if(data.about_duration['0'].about_page != undefined && data.about_duration['0'].about_page != ''){
                  $('#about').append(data.about_duration['0'].about_page);
                }
              }
            if(isDone()){
                setTimeout(function() {
                    if (window.location.href.indexOf('#awards') > -1) {
                            $('.aw').click();
                    } else if(window.location.href.indexOf('#contactus') > -1) {
                            $('.ct').click();
                    } else {
                            $('.ab').click();
                    }
                }, 2000);
            }
        })
        var isDone = function(){
            if (document.readyState) {
                return true;
            }
        }
    }
//facebook
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
})

