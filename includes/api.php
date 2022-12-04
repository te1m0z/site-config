<?php


final class Global_Config_API {
    
    public static function getAllGroups ()
    {
        global $wpdb;
        $table  = $wpdb->prefix . GLOBAL_CONFIG_GROUPS_TABLE;
        $result = $wpdb->get_results('SELECT * FROM ' . $table);
        return $result;
    }
}