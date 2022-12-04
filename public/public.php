<?php


class Global_Config_Public {

    private $plugin_name;

    private $version;

    public function __construct()
    {
        $this->plugin_name = glcnf()->get_plugin_name();
        $this->version     = glcnf()->get_version();
    }

    public function enqueue_styles()
    {
        wp_enqueue_style(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'css/public.css',
            [],
            $this->version,
            'all'
        );
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'js/public.js',
            [ 'jquery' ],
            $this->version,
            false
        );
    }
}