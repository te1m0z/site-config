<?php


class Global_Config_Activator {

    public static function activate()
    {
        global $wpdb;
        
        $final_groups_table  = $wpdb->prefix . GLOBAL_CONFIG_GROUPS_TABLE;
        $final_options_table = $wpdb->prefix . GLOBAL_CONFIG_OPTIONS_TABLE;
        $charset_collate     = $wpdb->get_charset_collate();
        
        if ( $wpdb->get_var( "show tables like '$final_groups_table'" ) != $final_groups_table ) 
        {
            $sql = "CREATE TABLE `$final_groups_table` (
                    `id` int NOT NULL AUTO_INCREMENT,
                    `title` varchar(255) NOT NULL,
                    `order` int NOT NULL DEFAULT '1',
                    PRIMARY KEY (id)
            ) $charset_collate;";
            
            $wpdb->query($sql);
        }
        
        if ( $wpdb->get_var( "show tables like '$final_options_table'" ) != $final_options_table ) 
        {
            $sql = "CREATE TABLE `$final_options_table` (
                    `id` int NOT NULL AUTO_INCREMENT,
                    `title` varchar(255) NOT NULL,
                    `description` varchar(255),
                    `order` int NOT NULL DEFAULT '1',
                    `input_type` varchar(100) NOT NULL DEFAULT 'text',
                    `group_id` int,
                    PRIMARY KEY (id),
                    FOREIGN KEY (group_id) REFERENCES $final_groups_table(id)
            ) $charset_collate;";
            
            $wpdb->query($sql);
        }
    }
}