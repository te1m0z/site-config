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


if ( !defined( 'WPINC' ) )
{
	die( 'Plugin can be invoked only in WP context' );
}

# Plugin version
define( 'GLOBAL_CONFIG_VERSION', '1.0.0' );

# Plugin name
define( 'GLOBAL_CONFIG_NAME', 'global-config' );

# Plugin DB tables
define( 'GLOBAL_CONFIG_GROUPS_TABLE',  $wpdb->prefix . 'global_config_groups' );
define( 'GLOBAL_CONFIG_OPTIONS_TABLE', $wpdb->prefix . 'global_config_options' );


# Helpers functions
if ( !function_exists( 'dump' ) )
{
    function dump( $value = 'Value not given.' )
    {
        echo '<pre>';
        var_dump( $value );
        echo '</pre>';
    }
}

if ( !function_exists( 'dd' ) )
{
    function dd( $value = 'Value not given.' )
    {
        echo '<pre>';
        var_dump( $value );
        echo '</pre>';
        die;
    }
}

# Activate function
function activate_global_config()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	(new Global_Config_Activator())->run();
}

# Deactivate function
function deactivate_global_config()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
	(new Global_Config_Deactivator())->run();
	
	dump(Global_Config_Deactivator);
}

register_activation_hook  ( __FILE__, 'activate_global_config' );
register_deactivation_hook( __FILE__, 'deactivate_global_config' );


# Start initialize core class
require plugin_dir_path( __FILE__ ) . 'includes/core.php';


function glcnf()
{
    return Global_Config_Core::getInstance();
}

$glcnf = glcnf();




