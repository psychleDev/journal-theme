<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header-image">
        <img src="<?php echo get_template_directory_uri(); ?>/header-image.jpg" alt="Journal Header">
    </div>
    <div class="container">
       
        <header>
         <div class="auth-button-container">
        <?php if (is_user_logged_in()): ?>
            <a href="<?php echo wp_logout_url(home_url()); ?>" class="auth-button logout">
                Logout
            </a>
        <?php else: ?>
            <a href="<?php echo wp_login_url(); ?>" class="auth-button login">
                Login
            </a>
        <?php endif; ?>
    </div>
		    <!-- 	<h1><?php bloginfo('name'); ?></h1> 
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?> -->
        </header> 
    </div>
