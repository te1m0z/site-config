<?php


class Global_Config_Deactivator {

    public function run()
    {
        $this->deleteAllTables();
    }
    
    private function deleteAllTables()
    {
        global $wpdb;
        
        $wpdb->query( "DROP TABLE IF EXISTS ".GLOBAL_CONFIG_GROUPS_TABLE );
        $wpdb->query( "DROP TABLE IF EXISTS ".GLOBAL_CONFIG_OPTIONS_TABLE );
    }
}