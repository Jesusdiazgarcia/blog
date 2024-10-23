<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body  <?php body_class("m-0 p-0"); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog' ); ?></a>
	<header id="masthead" class="container-fluid d-flex justify-content-center align-items-center flex-column titulo text-center ">
	<h1 class="mt-2 focus-in-contract ">Bienvenido a mi museo de recuerdos</h1>
	<button class="button botonr  mb-2" id="botonmodal">
    	<span class="button-content">Pulsa aqui</span>
	</button>
	</header><!-- #masthead -->
