(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-242242-18' , '.gmanetwork.com'+ window.location.pathname);
    ga('send', 'pageview');

var CUSTOM_ANALYTIC;

CUSTOM_ANALYTICS = {
    ga_click_event: function (params) {
        ga('send', {
            'hitType': 'event', // Required.
            'eventCategory': params.event_category, // Required.
            'eventAction': typeof params.action !== "undefined" ? params.action : 'click' // Required.
        });
    },
    ga_send_event: function (params) {
        ga('send', {
            'hitType': 'pageview',
            'page': params.page_overriden,
            'title': params.page_title
        });
    }
}