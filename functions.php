<?php

/**
 * manufacturers  Theme functions and definitions
 *
 * @package manufacturers
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
// manufacturers includes directory.
$manufacturers_inc_dir = 'inc';

// Array of files to include.
$manufacturers_includes = array(
    '/setup.php',                           // Theme setup and custom theme supports.
    '/enqueue.php',                         // Enqueue scripts and styles.
    '/pagination.php',                      // Custom pagination for this theme.
    '/customizer.php',                      // Customizer additions.
    '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
    '/editor.php',                          // Load Editor functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
    $manufacturers_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
    $manufacturers_includes[] = '/jetpack.php';
}

// Load Advanced Custom Fields functions if Advanced Custom Fields is activated.
if (class_exists('ACF')) {
    $manufacturers_includes[] = '/acf.php';
    $manufacturers_includes[] = '/acf-blocks.php';
}


// Include files.
foreach ($manufacturers_includes as $file) {
    require_once get_theme_file_path($manufacturers_inc_dir . $file);
}