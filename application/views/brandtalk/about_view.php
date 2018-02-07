<script src="<?php echo BASE_URL ?>res/js/brandtalkjs/about_init.js" type="text/javascript"></script>
<script>
  $(function() {
       $('a[href*="#"]:not([href="#"])').click(function() {
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html, body').animate({
               scrollTop: target.offset().top
             }, 1000);
             return false;
           }
         }
	   });
     });
</script>
	<div class="container">
		<div class="img-banner">
			<a href="/brandtalk/">
				<img class="responsive-img img-brandtalk" src="<?php echo BASE_URL ?>res/images/BRANDTALK.jpg" alt="">
			</a>
		</div>
		<div class="col-md-8">
			<div id="about"></div>
		</div>
		<div class="col-md-4">
			<div id="fb-root">
					<div class="fb-page" data-href="https://www.facebook.com/GMABrandTalk/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GMABrandTalk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GMABrandTalk/">GMA Brand Talk</a></blockquote></div>
				</div>
		</div>

	</div>

	 <div class="img-about col-md-12">
	 <div class="about">&copy; 2018 GMA Brand Talk | <span><a class="ab" href="#about">About Us</a> | <span><a class="ct" href="#contactus">Contact Us</a></span> |<span><a class="aw" href="#awards">Awards</a></span></div>
    </div>
  </div>


