<?php
/*
Plugin Name: Symfony integration
Description: Symfony-to-WP integration test
Version: 0.0.1
Author: Stepan Anchugov
Author URI: http://kixlive.ru
*/

function sfplugin_sayHello() {
    echo symfony('app.hello_service')->hello();
}

add_shortcode('say_hello', 'sfplugin_sayHello');
