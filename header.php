<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neftheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
    
<?php add_action('wp_enqueue_scripts', 'bootstrap_inc'); ?>
    
<body <?php body_class(); ?>>
<div class="container-fluid">    
<div id="row page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'neftheme' ); ?></a>

	<header id="masthead" class="row site-header" role="banner">
        <div class="navbar navbar-default">
		<div class="navbar-header site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </h1>
			<?php else : ?>
				<p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </p>
			<?php
			endif;
            ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="btn btn-default menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php esc_html_e( 'Primary Menu', 'neftheme' ); ?>
            </button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
        </div><!-- .navbar -->
	</header><!-- #masthead -->

	<div id="content" class="col-xs-8 site-content">
