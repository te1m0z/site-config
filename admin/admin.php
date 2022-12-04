<?php

class Global_Config_Admin
{

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
            plugin_dir_url( __FILE__ ) . 'css/admin.css',
            [],
            $this->version,
            'all'
        );
    }

    public function enqueue_scripts()
    {
        $plain_modal   = $this->plugin_name . '_plain_modal';
        $table_dragger = $this->plugin_name . '_table_drag';
        
        wp_deregister_script('jquery');
        wp_register_script(
            'jquery',
            plugin_dir_url( __FILE__ ) . 'js/libs/jquery-3.6.1.min.js',
            false,
            '3.6.1'
        );
        
        wp_enqueue_script(
            $plain_modal,
            plugin_dir_url( __FILE__ ) . 'js/libs/jquery.plainmodal.min.js',
            [ ],
            $this->version
        );
        
        wp_enqueue_script(
            $table_dragger,
            plugin_dir_url( __FILE__ ) . 'js/libs/table-dragger.min.js',
            [ ],
            $this->version
        );
        
        wp_enqueue_script(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'js/admin.js',
            [ 'jquery', $plain_modal, $table_dragger ],
            $this->version,
            true
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
    
    public function admin_head()
    {
        ?>
            <script>
                const glcnf = {
                    contQuerySel: '#glcnf-container'
                }
            </script>
        <?php
    }
    
    public function renderPage()
    {
        ?>
            <div class="intro-text">
                <h1>Основные настройки сайта</h1>
                <p>
                    <a href="#">Документация</a> по использованию
                </p>
            </div>
            
            <div id="glcnf-container">
                <div class="left-part part">
                    
                    <h2>Настройки</h2>
                    
                    <p>1. модалка добавления/обновления группы</p>
                    <p>2. модалка добавления/обновления настройки</p>
                    <p>3. модалка добавления подтверждения удаления</p>
                    
                    <h4>У вас нет ещё ни одной настройки</h4>
                    
                    <!-- <table id="options-table" class="glcnf-table sindu-table">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <th>Gross</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="sindu_handle">Star Wars 111</td>
                                <td>Adventure, Sci-fi</td>
                                <td>1977</td>
                                <td>$460,935,665</td>
                            </tr>
                            <tr>
                                <td class="sindu_handle">Howard The Duck 222</td>
                                <td>"Comedy"</td>
                                <td>1986</td>
                                <td>$16,295,774</td>
                            </tr>
                            <tr>
                                <td class="sindu_handle">American Graffiti 333</td>
                                <td>Comedy, Drama</td>
                                <td>1973</td>
                                <td>$115,000,000</td>
                            </tr>
                        </tbody>
                    </table> -->
                    
                    <?php submit_button('Создать', 'primary', false, false); ?>
                </div>
                <div class="right-part part">
                    <h2>Группы</h2>
                        <table id="options-table" class="glcnf-table sindu-table">
                            <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Genre</th>
                                    <th>Year</th>
                                    <th>Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="sindu_handle">Star Wars 111</td>
                                    <td>Adventure, Sci-fi</td>
                                    <td>1977</td>
                                    <td>$460,935,665</td>
                                </tr>
                                <tr>
                                    <td class="sindu_handle">Howard The Duck 222</td>
                                    <td>"Comedy"</td>
                                    <td>1986</td>
                                    <td>$16,295,774</td>
                                </tr>
                                <tr>
                                    <td class="sindu_handle">American Graffiti 333</td>
                                    <td>Comedy, Drama</td>
                                    <td>1973</td>
                                    <td>$115,000,000</td>
                                </tr>
                            </tbody>
                        </table>
                        <?php submit_button('Создать', 'primary', 'create-group', false); ?>
                        
                    </div>
                </div>
            </div>
            <div
                id="glcnf-create-update-group"
                class="glcnf-modal"
                data-action="create-group"
            >
                create
            </div>
            <div
                id="glcnf-create-update-group"
                class="glcnf-modal"
                data-action="update-group"
            >
                update
            </div>
        <?php
    }
}