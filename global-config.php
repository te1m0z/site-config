<?php

/*
Plugin Name: Global Config
Plugin URI: https://github.com/te1m0z/
Description: Плагин конфигурации сайта
Version: 1.0.0
Author: Dmitriy Balamozhnov
Text Domain: global-config
Author URI: mailto:dmitriy.balamozhnov@gmail.com
*/


if ( ! defined( 'WPINC' ) ) {
	die('Plugin can be invoked only in WP context!');
}

# Plugin version
define( 'GLOBAL_CONFIG_VERSION', '1.0.0' );

# Plugin name
define( 'GLOBAL_CONFIG_NAME', 'global-config' );

# Plugin DB tables
define( 'GLOBAL_CONFIG_TABLE', 'global_config' );
define( 'GLOBAL_CONFIG_GROUPS_TABLE',  GLOBAL_CONFIG_TABLE . '_groups' );
define( 'GLOBAL_CONFIG_OPTIONS_TABLE', GLOBAL_CONFIG_TABLE . '_options' );

# Activate function
function activate_global_config() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-global-config-activator.php';
	Global_Config_Activator::activate();
}

# Deactivate function
function deactivate_global_config() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-global-config-deactivator.php';
	Global_Config_Deactivator::deactivate();
}

register_activation_hook( __FILE__,   'activate_global_config' );
register_deactivation_hook( __FILE__, 'deactivate_global_config' );


# Start initialize core class
require plugin_dir_path( __FILE__ ) . 'includes/core/class-global-config-core.php';



$plugin = new Global_Config_Core();
$plugin->run();