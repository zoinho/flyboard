<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<!-- Background image belongs to WIX.com -->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:url" content="http://www.cfkrakow.com/" />
<meta property="og:image" content="http://cfkrakow.nazwa.pl/www/wp-content/themes/cf-krakow/inc/logo.jpg" />
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
<meta property="og:description" content="Akademia treningu siłowego i kondycyjnegoprowadzona w Krakowie przez licencjonowanych instruktorów." />
<title><?php wp_title( '|', true, 'right' ); ?></title>
	
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="image_src" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/logo.jpg" />
<link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/wp-content/plugins/easy-contact-forms/easy-contact-forms-forms.1.4.9.js"></script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '419506284855595']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=419506284855595&amp;ev=PixelInitialized" /></noscript>
</head>

<body <?php body_class(); ?> >
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php
	echo do_shortcode("[metaslider id=46]");
	?>
<div id="page" class="hfeed site">
    
	<header id="masthead" class="site-header" role="banner">
				<div class="logo-wrapper">
				
				
				</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
<div class="social-icons">
					<a href="https://www.facebook.com/CFKrakow" ><span class="social fb" /></a>
					<a href="https://www.youtube.com/channel/UCkiTTRjIioYymvLaEEjyyiA" ><span class="social yt"/></a>
				</div>
	</header><!-- #masthead -->
   	
	<div id="main" class="wrapper">