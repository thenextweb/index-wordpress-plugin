<?php

/*
Plugin Name: Index.co plugin
Plugin URI: http://index.co/integrations/wordpress
Description: The Index.co plugin for Wordpress
Version: 1.1
Author: Otto, Edzo & Laura from Index.co
*/
include 'functions/index-server.php';
include 'functions/meta-box.php';
include 'functions/publish-meta-box.php';
include 'filter/filter.php';

include 'filter/shortcode.php';

add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_script('index', plugins_url('assets/index.js', __FILE__), ['jquery']);
    wp_enqueue_style('index',plugins_url('assets/index.css', __FILE__));
});
