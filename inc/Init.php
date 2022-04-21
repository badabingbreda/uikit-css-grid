<?php

namespace UIKitCSSGrid;

class Init {

    public function __construct() {
        add_action( 'wp_enqueue_scripts' , __CLASS__ . '::enqueue_style' );
    }

    public static function enqueue_style() {
        wp_enqueue_style( 'uikit-css-grid', UIKITCSSGRID_URL . 'css/uikit-css-grid.min.css' , array() , UIKITCSSGRID_VERSION, 'all' );
    }
}