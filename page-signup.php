<?php
/*
Template Name: Signup Page
*/

// Only proceed if user is not logged in
if (!is_user_logged_in()) {
    // Get WP Auth0 plugin options
    $auth0_options = get_option('wp_auth0_settings');

    // Generate state parameter
    $state = wp_create_nonce('auth0');

    // Store state in session
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['auth0_state'] = $state;

    // Build Auth0 URL with proper parameters
    $auth0_url = sprintf(
        'https://%s/authorize?',
        $auth0_options['domain']
    );

    $auth0_params = array(
        'response_type' => 'code',
        'client_id' => $auth0_options['client_id'],
        'redirect_uri' => site_url('/index.php?auth0=1'),
        'scope' => 'openid email profile',
        'state' => $state,
        'screen_hint' => 'signup'
    );

    $auth0_url .= http_build_query($auth0_params);

    wp_redirect($auth0_url);
    exit;
}

get_header();
?>

<div class="container">
    <h1>Sign Up</h1>
    <?php if (is_user_logged_in()): ?>
        <p>You're already logged in!</p>
    <?php else: ?>
        <p>Redirecting to signup...</p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>