<?php

/**
 * Display a customer's full name to My Account page in WooCommerce
 */
// Add customer's full name to My Account page in WooCommerce
function display_customer_full_name() {
    // Get the current user's ID
    $user_id = get_current_user_id();

    // Get the user's first and last name
    $first_name = get_user_meta($user_id, 'first_name', true);
    $last_name = get_user_meta($user_id, 'last_name', true);

    // Display the full name
    if ($first_name || $last_name) {
        echo '<p class="woocommerce-customer-name">Welcome, ' . esc_html($first_name) . ' ' . esc_html($last_name) . '!</p>';
    }
}

// Hook the function to WooCommerce My Account page
add_action('woocommerce_account_dashboard', 'display_customer_full_name');
