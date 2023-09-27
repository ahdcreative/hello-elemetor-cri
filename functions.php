<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorCri
 */

 if ( ! defined('ABSPATH')) {
    exit; //esci se chiamato direttamente
 }

 define('HELLO_ELEMENTOR_CRI_VERSION', '2.0.0');

 /**
  * Carica tema child e stili
  *
  * @return void
  */

  function hello_elementor_cri_scripts_styles() {
    wp_enqueue_style( 
        'hello-elementor-cri-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style'
        ],
        HELLO_ELEMENTOR_CRI_VERSION
    );
  }
  add_action('wp_enqueue_scripts', 'hello_elementor_cri_scripts_styles', 20);