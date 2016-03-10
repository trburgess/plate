<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Plugin Name: Plate
 * Description: The WordPlate framework plugin.
 * Author: Vincent Klaiber
 * Author URI: https://vinkla.com
 * Version: 1.0.0
 * Plugin URI: https://github.com/wordplate/plate
 */

add_action('after_setup_theme', function () {
    require_if_theme_supports('plate-cleanup', __DIR__.'/src/cleanup.php');
    require_if_theme_supports('plate-footer-text', __DIR__.'/src/footer-text.php');
}, 100);
