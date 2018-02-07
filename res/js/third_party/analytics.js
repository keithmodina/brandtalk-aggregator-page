/* BEGIN GOOGLE ANALYTICS */
var domain = window.location.hostname;
var _gaq = _gaq || [];
_gaq.push(['_setAccount', ga_account]);

if ( domain == 'www.gmanetwork.com' || domain == 'gmanetwork.com' || domain == 'www2.gmanetwork.com'  || domain == 'prd2.gmanetwork.com' ){
	_gaq.push(['_setDomainName', '.gmanetwork.com']);
}
else if ( domain == 'www.dgmanetwork.com' || domain == 'dgmanetwork.com' || domain == 'aws.dgmanetwork.com'  ){
	_gaq.push(['_setDomainName', '.dgmanetwork.com']);
}
else if ( domain == 'www.tgmanetwork.com' || domain == 'tgmanetwork.com' || domain == 'aws.tgmanetwork.com'  ){
	_gaq.push(['_setDomainName', '.tgmanetwork.com']);
}
else{
	_gaq.push(['_setDomainName', '.dgmanetwork.com']);
}

_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


/* Effective Measures */
document.write('<noscript><img src="//ph.effectivemeasure.net/em_image" alt="" style="position:absolute; left:-5px;" /></noscript>');

(function() {
	var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
	em.src = 'http://ph-cdn.effectivemeasure.net/em.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
})();




