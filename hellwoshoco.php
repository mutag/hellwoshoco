<?php
/**
 * Plugin Name: Hello World Short Code
 * Plugin URI: http://www.frknlzr.com/webdev/hellwoshocopage.php
 * Description: Implements a shortcode [hellwoshoco] which will output Hello World!
 * Version: .1
 * Author: Willi Brown of FrknLzr
 * Author URI: http://www.frknlzr.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 //Props to http://codex.wordpress.org/Shortcode_API

 //You will notice we have no arguments there in the parentheses
 //but we could use them to alter our functions behavior and the return value
function hellwo_func(  ){
	$mytext = "Hello World!";
	return  $mytext ;
}

//The `add_shortcode()` function is used to register a shortcode handler
//shortcodes must be in lower case. Again props to the codex
add_shortcode( 'hellwoshoco', 'hellwo_func' );
?>