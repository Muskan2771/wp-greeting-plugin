<?php
/**
 * Plugin Name: Greeting Plugin
 * Description: Displays a greeting message using the [greet_user] shortcode.
 * Version: 1.0
 * Author: Muskan Shaikh
 */

function greet_user_shortcode() {
    return "<p>Hello, welcome to my WordPress plugin!</p>";
}
add_shortcode('greet_user', 'greet_user_shortcode');
