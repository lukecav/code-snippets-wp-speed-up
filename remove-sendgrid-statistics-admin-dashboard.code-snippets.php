<?php

/**
 * Remove SendGrid Statistics Admin Dashboard
 */
add_action('plugins_loaded', function (): void {
    remove_action('init', ['Sendgrid_Statistics', 'set_up_menu']);
});
