<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Omnihealth
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
   <body <?php body_class(); ?>>

      <?php wp_body_open(); ?>
      <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'omnihealth' ); ?></a>
      <header id="masthead" class="site-header custom-header">
         <div class="header-container">
            <div class="logo">
               <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
               <div class="site-logo">
                  <?php the_custom_logo(); ?>
               </div>
               <?php else : ?>
               <div class="site-title">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php bloginfo('name'); ?>
                  </a>
               </div>
               <?php endif; ?>
            </div>
            <nav class="menu">
               <ul>
                  <li><a href="#">OmniMD Products</a></li>
                  <li><a href="#">Healthcare Services</a></li>
                  <li><a href="#">OmniMD AI</a></li>
                  <li><a href="#">Specialities</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Resources</a></li>
               </ul>
            </nav>
            <div class="cta">
               <a href="#" class="demo-btn">Schedule A Demo</a>
            </div>
         </div>
      </header>
      <!-- #masthead -->