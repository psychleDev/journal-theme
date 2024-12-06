<?php
// Enqueue styles and scripts
function journal_theme_enqueue_styles() {
    wp_enqueue_style('journal-theme-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'journal_theme_enqueue_styles');

// Register navigation menu
function journal_theme_setup() {
    register_nav_menu('primary', __('Primary Menu', 'journal-theme'));
}
add_action('after_setup_theme', 'journal_theme_setup');
?>
