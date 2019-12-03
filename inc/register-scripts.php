<?php
defined('ABSPATH') or die("Prevent direct access!");

if(!function_exists('wp_ms_form_register_scripts')) :

  // Register scripts stylesheets and scripts
  function wp_ms_form_register_scripts() {

    // Bootstrap css
    wp_register_style(
      'wp-ms-form-bootstrap-css',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css',
      [],
      '4.4.0'
    );

    // datetime picker css with tempusdominus bootstrap
    wp_register_style(
      'wp-ms-form-tempusdominus-css',
      'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css',
      [],
      '5.0.0'
    );

    // fontawesome
    wp_register_style(
      'wp-ms-form-fontawesome-css',
      'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
      [],
      '4.7.0'
    );


     // Custom css
     wp_register_style(
       'wp-ms-form-custom-css',
       MSF_PLUGIN_URL.'assets/css/custom.css'
     );

    // Bootstrap js
    wp_register_script(
      'wp-ms-form-bootstrap-js',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js',
      ['jquery'],
      '4.4.0',
      true
    );

    // Moment js
    wp_register_script(
      'wp-ms-form-moment-js',
      'https://momentjs.com/downloads/moment.js',
      [],
      '2.24.0',
      true
    );

    // datetime picker js with tempusdominus bootstrap
    wp_register_script(
      'wp-ms-form-tempusdominus-js',
      'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js',
      ['wp-ms-form-bootstrap-js', 'wp-ms-form-moment-js'],
      '5.0.0',
      true
    );

    // Fabric js
    wp_register_script(
      'wp-ms-form-fabric-js',
      'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.5.0/fabric.min.js',
      [],
      '3.5.0',
      true
    );

   // Custom js
   wp_register_script(
     'wp-ms-form-custom-js',
     MSF_PLUGIN_URL.'assets/js/custom.js',
     ['jquery'],
     '',
     true
   );

  }

  add_action('wp_enqueue_scripts', 'wp_ms_form_register_scripts');
endif;
