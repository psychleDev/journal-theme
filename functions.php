<?php
// Enqueue styles and scripts
function journal_theme_enqueue_styles()
{
    wp_enqueue_style('journal-theme-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'journal_theme_enqueue_styles');

// Register navigation menu
function journal_theme_setup()
{
    register_nav_menu('primary', __('Primary Menu', 'journal-theme'));
}
add_action('after_setup_theme', 'journal_theme_setup');

// Change the default WP email address
function custom_wp_mail_from($original_email_address)
{
    return 'support@journal.ignite30.co'; // Replace with your preferred email
}
add_filter('wp_mail_from', 'custom_wp_mail_from');

// Change the default WP email "From" name
function custom_wp_mail_from_name($original_email_from)
{
    return 'Ignite 30'; // Replace with your preferred from name
}
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');

add_filter('auth0_auth_url', function ($auth_url, $state) {
    // Check if we're on the registration page
    if (isset($_GET['action']) && $_GET['action'] === 'register') {
        // Add screen_hint=signup to the Auth0 URL
        $auth_url = add_query_arg('screen_hint', 'signup', $auth_url);
    }
    return $auth_url;
}, 10, 2);

?>