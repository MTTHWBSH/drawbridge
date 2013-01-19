<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Drawbridge</title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
<?php wp_head(); ?>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
 
    <header>
	
	<!-- Header IMAGE -->
	<div id="banner"><img src="<?php bloginfo('template_directory'); ?>/header.png" alt="drawbridge logo" /></div>
	
  </header>
  

  	
  	<!-- NAVIGATION -->
  	
  	<?php
if ( is_page('Page One') ) { $active = 'one'; }
elseif ( is_page('Page Two') ) { $active = 'two'; }
elseif ( is_page('Page Three') ) { $active = 'three'; }
elseif ( is_page('Page Four') ) { $active = 'four'; }
elseif ( is_page('Page Five') ) { $active = 'two'; }
elseif ( is_page('Page Six') ) { $active = 'three'; }
elseif ( is_page('Page Seven') ) { $active = 'four'; }
?>
  	
  	<div id="nav">
  		<ul>
  			<li><a class="one" href="#">Home</a></li>
  			<li class="divider"></li>
   			<li><a class="two" href="#">About</a></li>
  			<li class="divider"></li> 
  			<li><a class="three" href="#">Media</a></li>
  			<li class="divider"></li>  	
  			<li><a class="four" href="#">Products</a></li>
  			<li class="divider"></li>  								
  			<li><a class="five" href="#">People</a></li>
  			<li class="divider"></li>
  			<li><a class="six" href="#">Partners</a></li>
  			<li class="divider"></li>
  			<li><a class="seven" href="#">Contact</a></li>
  		</ul>
  	</div><!-- div id="nav"> -->
