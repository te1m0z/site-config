<?php

class Global_Config_Admin {

    private $plugin_name;

    private $version;

    public function __construct( $plugin_name, $version )
    {
        $this->plugin_name = $plugin_name;
        $this->version     = $version;
    }

    public function enqueue_styles()
    {
        wp_enqueue_style(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'css/admin.css',
            [],
            $this->version,
            'all'
        );
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'js/admin.js',
            [ 'jquery' ],
            $this->version,
            false
        );
    }
    
    public function admin_menu()
    {
        add_menu_page(
            'Global Site Configuration',
            'Site Settings',
            'administrator',
            $this->plugin_name,
            [$this, 'renderPage'],
            'dashicons-admin-generic',
            3
        );
    }
    
    public function renderPage()
    {
        ?>
            <div id="<?= $this->plugin_name . '-container' ?>">
                <div class="left-part part">
                    left
                    
                    <?php submit_button('Создать', 'primary', false, false); ?>
                </div>
                <div class="right-part part">
                    rrr
                    <span class="add-icon" aria-hidden="false"></span>
                </div>
            </div>
        <?php
    }
}