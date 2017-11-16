<?php
/**
 * @since 1.0.0
 * @package We
 *
 * Plugin Name:       We
 * Description:       Plugin for we customizable forum.
 * Version:           1.0.0
 * Author:            Anton Segerkvist
 * Author URI:        http://antonsegerkvist.net
 * License:           MIT
 * Text Domain:       We
 */

defined ('ABSPATH') or die ('Direct access not allowed');

/**
 * Defines plugin macros.
 */

define ('WE_VERSION', '1.0.0');

/**
 * The plugin activation hook.
 */

function activate_we () {

}

/**
 * The plugin deactivation hook.
 */

function deactivate_we () {

}

/**
 * Register the activation and deactivation functions.
 */

register_activation_hook(__FILE__, 'activate_we');
register_deactivation_hook(__FILE__, 'deactivate_we');

/**
 * Begins execution of the plugin.
 */

function run_we () {

}
run_we();
?>
