<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Add Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png" >
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" >
	<link href='https://fonts.googleapis.com/css?family=Bad+Script&subset=cyrillic' rel='stylesheet' type='text/css'>

	<!-- Add Google Fonts -->

	<?php wp_head(); ?>
	<!--[if IE]>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins/html5shiv.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins/respond.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>

<b style="position: fixed; left:0; top:30px; z-index: 3325; ">
<?php
 global $template;
 //print_r(basename($template));
 //echo basename($template);
 $myPage = basename($template);
 ?>
</b>
<?php
	if ($myPage !='template-home.php'):
?>
	<header class="header">
		<div class="row large-uncollapse medium-uncollapse small-collapse">
			<div class="medium-4 columns">
				<div class="logo small-only-text-center">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
				</div><!--end of .logo-->
			</div> <!--end of .columns -->
			<div class="medium-8 columns">
				<nav class="top-bar" data-topbar="" role="navigation" data-options="{is_hover: false, mobile_show_parent_link: true}">

					<ul class="title-area">
						<li class="name"></li>
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul><!--END of .top-bar-->
					<section class="top-bar-section">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'foundation_page_menu', "container" => false, 'walker' => new foundation_navigation() ) ); ?>
					</section>	<!--END of .top-bar-section -->
				</nav>
			</div>	<!--END of .columns -->
		</div>	<!--END of .row -->
	</header> <!--END of header -->
<?php endif ?>
