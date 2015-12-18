<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skio_KnD
 *
 * Init = based on narrow jumbo
 */

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>KnD Fashions</title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">            
	          <?php
	          	$args = array(
						'menu' 			=> 'primary',
						'menu_class'	=> 'nav navbar-nav',
						'container'		=> 'false'
	          		);
	          	wp_nav_menu( $args ); //see codex
	          ?>
          </ul>
        </nav>
        <h3 class="text-muted"><?php bloginfo('name'); ?></h3>
      </div>
