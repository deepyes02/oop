<?php
require(get_template_directory() . '/vendor/autoload.php');
/**
 * myobject functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myobject
 */

use MyObjects\EnqueueScript;
use MyObjects\AfterSetupTheme;
use MyObjects\WidgetsInit;

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

new EnqueueScript;


// require after setup theme
new AfterSetupTheme;

// register widget area
new WidgetsInit('My Crazy Sidebar', 1);

// require all underscoore loader templates
require(get_template_directory() . '/inc/underscore-loader.php');
