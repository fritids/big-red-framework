<?php global $soup; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lte9 lte8 lte7 no-js no-jswin" <?php language_attributes(); ?>> <![endif]--> 
<!--[if (IE 7)&!(IEMobile)]> <html class="ie ie7 lte9 lte8 lte7 no-js no-jswin" <?php language_attributes(); ?>> <![endif]--> 
<!--[if (IE 7)&(IEMobile)]> <html class="iem ie7m lte9m lte8m lte7m no-js no-jswin" <?php language_attributes(); ?>> <![endif]-->
<!--[if (IE 8)&!(IEMobile)]> <html class="ie ie8 lte9 lte8 no-js no-jswin" <?php language_attributes(); ?>> <![endif]--> 
<!--[if (IE 9)&!(IEMobile)]> <html class="ie ie9 lte9 no-js no-jswin" <?php language_attributes(); ?>> <![endif]--> 
<!--[if (IE 9)&(IEMobile)]> <html class="iem ie9m lte9m no-js no-jswin" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)&!(IEMobile)]> <html class="ie no-js no-jswin" <?php language_attributes(); ?>> <![endif]--> 
<!--[if (gt IE 9)&(IEMobile)]> <html class="iem no-js no-jswin" <?php language_attributes(); ?>> <![endif]-->
<!--[if !IE]><!--> <html class="no-js no-jswin" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<title><?php wp_title("|", true, 'right'); ?></title>
	
	<?php wp_head(); ?>
	<meta name = "viewport" content = "user-scalable=no,initial-scale=1.0,maximum-scale=1.0,width=device-width">	
</head>
<body <?php body_class(); ?>>
<div id="skipLinks" class="nav">
	<a href="#content" tabindex="1">Skip to Content</a>
</div>

<div id="pageWrap">
<div id="header" role="banner" class="header">

	<a href="<?php echo home_url(); ?>" id="siteDetails">
	<<?php echo $soup->siteNameTag; ?> id="siteName"><span></span><?php bloginfo('name'); ?></<?php echo $soup->siteNameTag; ?>>
	<p id="siteDesc"><span></span><?php bloginfo('description'); ?></p>
	</a>
	
	<div id="headerWidgets"><?php
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header') ) {
			//insert static sidebar
			echo '<!' . '-- no header widgets --' . '>';
		}
	?></div>
	<!-- //#headerWidgets -->
	

	<?php
		if (function_exists('wp_nav_menu')) {
			wp_nav_menu(array(
					'theme_location' => 'header',
					'container' => 'div',
					'container_id' => 'navWrap',
					'container_class' => 'nav',
					'menu_class' => '',
					'menu_id' => 'nav',
					'depth' => 2,
					'show_home' => 1,
					'fallback_cb' => array(&$soup,'listPages')

				));
		}
		else {
			$soup->listPages();
		}

	?>

	
</div>
<!--//#header -->