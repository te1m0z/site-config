<?php

class Global_Config_Core {

    protected $loader;

    protected $plugin_name;

    protected $version;

    public function __construct()
    {
        $this->version     = defined( 'GLOBAL_CONFIG_VERSION' ) ? GLOBAL_CONFIG_VERSION : '1.0.0';
        $this->plugin_name = defined( 'GLOBAL_CONFIG_NAME' )    ? GLOBAL_CONFIG_NAME    : 'global-config';

        $this->load_dependencies();
        $this->define_admin_hooks();
		$this->define_public_hooks();
    }

    private function load_dependencies()
    {
        require_once plugin_dir_path( dirname(dirname( __FILE__ )) ) . 'includes/class-global-config-loader.php';
        require_once plugin_dir_path( dirname(dirname( __FILE__ )) ) . 'admin/class-global-config-admin.php';
        require_once plugin_dir_path( dirname(dirname( __FILE__ )) ) . 'public/class-global-config-public.php';
        
        $this->loader = new Global_Config_Loader();
    }

    private function define_admin_hooks()
    {
		$plugin_admin = new Global_Config_Admin( $this->get_plugin_name(), $this->get_version() );
		
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'admin_menu',            $plugin_admin, 'admin_menu' );
	}

    private function define_public_hooks()
    {
		$plugin_public = new Global_Config_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
	}

    public function run() {
		$this->loader->run();
	}

    public function get_plugin_name() {
		return $this->plugin_name;
	}

    public function get_version() {
		return $this->version;
	}

    public function get_loader() {
		return $this->loader;
	}

}