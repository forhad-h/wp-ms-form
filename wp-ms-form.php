<?php
/*
 * Plugin Name: WP Multi Step Form
 * Description: Multistep form. Shortcode: <strong>[wp_ms_form]</strong>
 * Author: Md. Forhad Hosain
 * Text Domain: wp-ms-form
*/
defined('ABSPATH') or die("Prevent direct access!");

// plugin url
if(!defined('MSF_PLUGIN_PATH'))
  define('MSF_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
if(!defined('MSF_PLUGIN_URL'))
  define('MSF_PLUGIN_URL', plugin_dir_url( __FILE__ ));
// register scripts and stylesheets
require_once MSF_PLUGIN_PATH.'inc/register-scripts.php';

// add integrity and crossorigin attributes in <link> and <script> tag
// according to bootstrap official page
include_once MSF_PLUGIN_PATH.'inc/add-tags-attributes.php';

// include shortcode
require_once MSF_PLUGIN_PATH.'inc/shortcode.php';
