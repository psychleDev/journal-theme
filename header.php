<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header-image">
        <img src="<?php echo get_template_directory_uri(); ?>/header-image.jpg" alt="Journal Header">
    </div>
    <div class="container">
         <header>
		    <!-- 	<h1><?php bloginfo('name'); ?></h1> 
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?> -->
        </header> 
    </div>
