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
    <link rel="icon" href="../../favicon.ico">

    <title>
      <?php wp_title('|', true, 'right'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >
   <div class="container">
        <div class="header clearfix">
          <nav>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>          
              <ul class="nav nav-pills pull-right"> 
                <?php
    	          	$args = array(
    						'menu' 			      => 'primary',
                'theme_location'  => 'primary',
                'depth'           => '2',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'primary-navigation',
    						'menu_class'	    => 'nav navbar-nav',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => 'new wp_bootstrap_navwalker())'
    	          		);
    	          	wp_nav_menu( $args ); //see codex
    	          ?>
              </ul>
       </nav>
       <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>

