<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--xmlns="http://www.w3.org/1999/xhtml"-->
	<head>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
			<?php
				$siteTitle = esc_attr( get_option( 'site_title' ) );
				$siteLink = esc_attr( get_option( 'site_link' ) );
			?>
			<header role="banner">
				<div id="headerimg">
					<h1 style="display: none;"><?php print $siteTitle; ?></h1>
					<a href="<?php print $siteLink; ?>" alt="home">
						<img src="<?php header_image(); ?>" alt="headerLogo" />
					</a> <!--Llink to Home -->
				</div> <!-- #headerimg -->
				<?php wp_nav_menu(); ?>
			</header>
