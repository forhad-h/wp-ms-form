<?php
defined('ABSPATH') or die("Prevent direct access!");

if(!function_exists('wp_ms_form_shortcode')) :

  // shortcode function
  function wp_ms_form_shortcode() {

    // add bootstrap css
    wp_enqueue_style('wp-ms-form-bootstrap-css');
    // add tempusdominus css
    wp_enqueue_style('wp-ms-form-tempusdominus-css');
    // add tempusdominus css
    wp_enqueue_style('wp-ms-form-fontawesome-css');

    // add jquery from wordpress resource
    wp_enqueue_script('jquery');
    // add bootstrap js
    wp_enqueue_script('wp-ms-form-bootstrap-js');
    // add moment js
    wp_enqueue_script( 'wp-ms-form-moment-js');
    // add tempusdominus js
    wp_enqueue_script( 'wp-ms-form-tempusdominus-js');
    // add custom js
    wp_enqueue_script( 'wp-ms-form-custom-js');

    // output buffering start
    ob_start();

    // include markup of form
    require_once MSF_PLUGIN_PATH."UI/form.php";

    // return output buffering
    return ob_get_clean();
  }
endif;

// add shortcode
add_shortcode('wp_ms_form', 'wp_ms_form_shortcode');
