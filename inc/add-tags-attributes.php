<?php

defined('ABSPATH') or die('Prevent direct access!');


// add some attribute in imported bootstrap css CDN link
if(!function_exists('wp_ms_form_add_css_link_attributes')) :
  function wp_ms_form_add_css_link_attributes($tag, $handle) {
    $css_integrity = "sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt";
    if($handle === 'wp-ms-form-bootstrap-css') {
      $tag = str_replace(
                '/>',
                "integrity='{$css_integrity}' crossorigin='anonymous' />",
                $tag
              );
    }
    return $tag;
  }
  add_action('style_loader_tag', 'wp_ms_form_add_css_link_attributes', 10, 2);
endif;

// add some attribute in imported bootstrap js CDN link
if(!function_exists('wp_ms_form_add_js_link_attributes')) :
  function wp_ms_form_add_js_link_attributes($tag, $handle) {
    $js_integrity = "sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P";
    if($handle === 'wp-ms-form-bootstrap-js') {
      $tag = str_replace(
                  "></",
                  " integrity='{$js_integrity}' crossorigin='anonymous'></",
                  $tag
                );
    }
    return $tag;
  }
  add_action('script_loader_tag', 'wp_ms_form_add_js_link_attributes', 11, 2);
endif;
