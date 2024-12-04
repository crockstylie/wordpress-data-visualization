<?php
/**
 * Plugin Name:     WordPress Data Visualization
 * Plugin URI:      https://antoinehory.fr
 * Description:     A WordPress Plugin for data Visualization.
 *                  You import a csv in the Back Office, and it shows the data as a table in the front office
 * Author:          Antoine HORY
 * Author URI:      https://antoinehory.fr
 * License:         GPL2
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     wordpress-data-Visualization
 * Domain Path:     /languages
 * Version:         0.1.0
 * php version 8.2
 *
 * @category        Wordpress_Plugin
 * @package         Wordpress_Data_Visualization
 * @author          Antoine HORY <contact@antoinehory.fr>
 * @license         https://opensource.org/licenses/gpl-license.php GNU Public License
 * @link            https://antoinehory.fr Author website
 */

// If this file is called directly, abort.
use Wordpress_Data_Visualization\Plugin;

if (!defined('WPINC')) {
    die;
}

// include autoloader.
require_once __DIR__ . '/vendor/autoload.php';

// Initiate a plugin class instance.
Plugin::$instance = new Plugin();

/**
 * Initialization hook
 * @return void
 */
function wordpress_data_Visualization_activate(): void
{
    Plugin::$instance->activate();
}
register_activation_hook(__FILE__, 'wordpress_data_Visualization_activate');

/**
 * Deactivation hook
 * @return void
 */
function wordpress_data_Visualization_activate_deactivate(): void
{
    Plugin::$instance->deactivate();
}
register_deactivation_hook(__FILE__, 'wordpress_data_Visualization_activate_deactivate');

// Run !
Plugin::$instance->run();
