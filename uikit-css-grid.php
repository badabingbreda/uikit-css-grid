<?php
/**
 * UIkit CSS Grid
 *
 * @package     UIkit CSS Grid
 * @author      Badabingbreda
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: UIkit CSS Grid
 * Plugin URI:  https://www.badabing.nl
 * Description: CSS Grid for Beaver Builder
 * Version:     1.2.0
 * Author:      Badabingbreda
 * Author URI:  https://www.badabing.nl
 * Text Domain: uikit-css-grid
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


use UIKitCSSGrid\Autoloader;
use UIKitCSSGrid\Init;

 if ( defined( 'ABSPATH' ) && ! defined( 'UIKITCSSGRID_VERSION' ) ) {
	register_activation_hook( __FILE__, 'UIKITCSSGRID_check_php_version' );

	/**
	 * Display notice for old PHP version.
	 */
	function UIKITCSSGRID_check_php_version() {
		if ( version_compare( phpversion(), '5.3', '<' ) ) {
			die( esc_html__( 'UIKIT CSS Grid requires PHP version 5.3+. Please contact your host to upgrade.', 'uikit-css-grid' ) );
		}
	}

    define( 'UIKITCSSGRID_VERSION' 	, '1.2.0' );
    define( 'UIKITCSSGRID_DIR'		, plugin_dir_path( __FILE__ ) );
    define( 'UIKITCSSGRID_FILE'	, __FILE__ );
    define( 'UIKITCSSGRID_URL' 	, plugins_url( '/', __FILE__ ) );

    define( 'CHECK_UIKITCSSGRID_PLUGIN_FILE', __FILE__ );

}

if ( ! class_exists( 'UIKitCSSGrid\Init' ) ) {

	/**
	 * The file where the Autoloader class is defined.
	 */
	require_once 'inc/Autoloader.php';
	spl_autoload_register( array( new Autoloader(), 'autoload' ) );

	new Init();

}