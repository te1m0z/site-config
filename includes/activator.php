<?php


final class Global_Config_Activator {
    
    public function run()
    {
        $this->createGroupsTable();
        $this->createOptionsTable();
    }
    
    private function createGroupsTable()
    {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        if ( $wpdb->get_var( "show tables like '".GLOBAL_CONFIG_GROUPS_TABLE."'" ) !== GLOBAL_CONFIG_GROUPS_TABLE ) 
        {
            $sql = "CREATE TABLE `".GLOBAL_CONFIG_GROUPS_TABLE."` (
                    `id` int NOT NULL AUTO_INCREMENT,
                    `title` varchar(255) NOT NULL,
                    `order` int NOT NULL DEFAULT '1',
                    PRIMARY KEY (id)
            ) $charset_collate;";
            
            $wpdb->query($sql);
        }
    }
    
    private function createOptionsTable()
    {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        if ( $wpdb->get_var( "show tables like '".GLOBAL_CONFIG_OPTIONS_TABLE."'" ) !== GLOBAL_CONFIG_OPTIONS_TABLE ) 
        {
            $sql = "CREATE TABLE `".GLOBAL_CONFIG_OPTIONS_TABLE."` (
                    `id` int NOT NULL AUTO_INCREMENT,
                    `title` varchar(255) NOT NULL,
                    `description` varchar(255),
                    `order` int NOT NULL DEFAULT '1',
                    `input_type` varchar(100) NOT NULL DEFAULT 'text',
                    `group_id` int,
                    PRIMARY KEY (id),
                    FOREIGN KEY (group_id) REFERENCES ".GLOBAL_CONFIG_GROUPS_TABLE."(id)
            ) $charset_collate;";
            
            $wpdb->query($sql);
        }
    }
}



