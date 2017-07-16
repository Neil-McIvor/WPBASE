<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
  </head>
  <body>
  
	<header>

	<div class="row">

		<div class="small-12 medium-7 large-9 columns">
		<div id="primary-menu">
			<nav>
			<?php /*?><?php wp_list_pages( '&title_li=' ); ?><?php */?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'new_menu_class' ) ); ?>
			</nav>
		</div>
		<div id="toggle-mobile-menu">
			<img src="<?php bloginfo('template_directory'); ?>/images/icon_nav-toggle.png" title="" alt="" />
		</div>
		<div id="mobile-menu">
		    <div id="mobile-menu-left">
			<nav>
			<?php /*?><?php wp_list_pages( '&title_li=' ); ?><?php */?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'new_menu_class' ) ); ?>
			</nav>
			</div>
			<div id="mobile-menu-right">
			<h5>mobile-menu-right</h5>
			<span>Area for any other information, Contact Number, Social etc.</span>
			</div>		
		</div>
		</div>

		<div class="small-12 medium-4 large-3 columns">
		<div id="logo"><a href="<?php bloginfo( 'wpurl' );?>"><img src="<?php bloginfo('template_directory'); ?>/images/placeholder_logo.jpg" title="" alt="" /></a></div>
		</div>

	</div>

	</header>

	<!-- Full Screen -->
		
	<div id="background-image-slider">
	  <div><img src="<?php bloginfo('template_directory'); ?>/images/background-image_01.jpg" title="" alt="" /></div>
	  <div><img src="<?php bloginfo('template_directory'); ?>/images/background-image_02.jpg" title="" alt="" /></div>
	  <div><img src="<?php bloginfo('template_directory'); ?>/images/background-image_03.jpg" title="" alt="" /></div>
	  <div><img src="<?php bloginfo('template_directory'); ?>/images/background-image_04.jpg" title="" alt="" /></div>
	  <div><img src="<?php bloginfo('template_directory'); ?>/images/background-image_05.jpg" title="" alt="" /></div>
	</div>