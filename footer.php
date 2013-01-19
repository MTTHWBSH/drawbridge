</div><!-- <div id="main"> --> 

<!-- FOOTER --> 
  <footer>
		<p>&copy; copyright Drawbridge LLC 2012</p>
  </footer>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
  <!-- end scripts -->

  <script type="text/javascript">
jQuery(document).ready(function($){

	/* prepend menu icon */
	$('#nav').prepend('<div id="menu-icon"><img src="http://opendrawbridge.com/wp-content/themes/drawbridge2012/menu_icon.png" alt="menu-icon"></div>');
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$(".menu-primary-navigation-container").slideToggle();
		$(this).toggleClass("active");
	});

});
</script>
  
  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35662289-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_footer(); ?>
</body>
</html>