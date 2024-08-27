<?php
/*
Plugin Name:	Alter WP Post Excerpt Length
Plugin URI:		https://github.com/v12dev/alter-wp-excerpt-length.git
Version:		1.0.0
Description:	A custom plugin used on Oxygen websites to revise (likely trim) length of WP Post excerpts.
Author:			Seth Lewis
Author URI:		https://v12marketing.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if (!defined('WPINC')) {
	die;
}

function my_excerpt_length()
{
	return 24;
}

add_filter('excerpt_length', 'my_excerpt_length');