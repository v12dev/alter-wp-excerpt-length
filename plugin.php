<?php
/*
Plugin Name:	Protect WooCommerce Product Categories
Plugin URI:		https://github.com/v12dev/protect-woo-categories.git
Version:		1.0.0
Description:	A custom plugin used on Oxygen websites to protect WooCommerce categories
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

function protect_woocommerce_category()
{
	if (is_product_category()) {
		$protected_category_slugs = array('ortho-molecular');

		$queried_object = get_queried_object();
		$current_category_slug = $queried_object->slug;

		if (in_array($current_category_slug, $protected_category_slugs)) {
			if (!post_password_required()) {
				return;
			} else {
				echo get_the_password_form();
				exit;
			}
		}
	}
}
add_action('template_redirect', 'protect_woocommerce_category');
