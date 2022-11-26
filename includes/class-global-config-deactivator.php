<?php


class Global_Config_Deactivator {

    public static function deactivate()
    {
        global $wpdb;
        
        $final_groups_table  = $wpdb->prefix . GLOBAL_CONFIG_GROUPS_TABLE;
        $final_options_table = $wpdb->prefix . GLOBAL_CONFIG_OPTIONS_TABLE;
        
        $wpdb->query("DROP TABLE IF EXISTS $final_groups_table");
        $wpdb->query("DROP TABLE IF EXISTS $final_options_table");
    }
}