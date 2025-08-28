<?php
if ( ! class_exists( 'Kindergarten_Elementor_Plugin_Activation_WPElemento_Importer' ) ) {
    /**
     * Kindergarten_Elementor_Plugin_Activation_WPElemento_Importer initial setup
     *
     * @since 1.6.2
     */

    class Kindergarten_Elementor_Plugin_Activation_WPElemento_Importer {

        private static $kindergarten_elementor_instance;
        public $kindergarten_elementor_action_count;
        public $kindergarten_elementor_recommended_actions;

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$kindergarten_elementor_instance) ) {
            self::$kindergarten_elementor_instance = new self();
          }
          return self::$kindergarten_elementor_instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

            // ---------- wpelementoimpoter Plugin Activation -------
            add_filter( 'kindergarten_elementor_recommended_plugins', array($this, 'kindergarten_elementor_recommended_elemento_importer_plugins_array') );

            $kindergarten_elementor_actions                   = $this->kindergarten_elementor_get_recommended_actions();
            $this->kindergarten_elementor_action_count        = $kindergarten_elementor_actions['count'];
            $this->kindergarten_elementor_recommended_actions = $kindergarten_elementor_actions['actions'];

            add_action( 'wp_ajax_create_pattern_setup_builder', array( $this, 'create_pattern_setup_builder' ) );
        }

        public function kindergarten_elementor_recommended_elemento_importer_plugins_array($kindergarten_elementor_plugins){
            $kindergarten_elementor_plugins[] = array(
                    'name'     => esc_html__('WPElemento Importer', 'kindergarten-elementor'),
                    'slug'     =>  'wpelemento-importer',
                    'function' => 'WPElemento_Importer_ThemeWhizzie',
                    'desc'     => esc_html__('We highly recommend installing the WPElemento Importer plugin for importing the demo content with Elementor.', 'kindergarten-elementor'),               
            );
            return $kindergarten_elementor_plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');      
            wp_register_script( 'kindergarten-elementor-plugin-activation-script', esc_url(get_template_directory_uri()) . '/includes/getstart/js/plugin-activation.js', array('jquery') );
            wp_localize_script('kindergarten-elementor-plugin-activation-script', 'kindergarten_elementor_plugin_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'kindergarten-elementor'),
                    'activating' => esc_html__('Activating', 'kindergarten-elementor'),
                    'error' => esc_html__('Error', 'kindergarten-elementor'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'wpelementoimpoter_admin_url' => esc_url(admin_url('admin.php?page=wpelemento-importer-tgmpa-install-plugins')),
                    'addon_admin_url' => esc_url(admin_url('admin.php?page=wpelementoimporter-wizard'))
                )
            );
            wp_enqueue_script( 'kindergarten-elementor-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function kindergarten_elementor_get_recommended_actions() {

            $kindergarten_elementor_act_count  = 0;
            $kindergarten_elementor_actions_todo = get_option( 'recommending_actions', array());

            $kindergarten_elementor_plugins = $this->kindergarten_elementor_get_recommended_plugins();

            if ($kindergarten_elementor_plugins) {
                foreach ($kindergarten_elementor_plugins as $kindergarten_elementor_key => $kindergarten_elementor_plugin) {
                    $kindergarten_elementor_action = array();
                    if (!isset($kindergarten_elementor_plugin['slug'])) {
                        continue;
                    }

                    $kindergarten_elementor_action['id']   = 'install_' . $kindergarten_elementor_plugin['slug'];
                    $kindergarten_elementor_action['desc'] = '';
                    if (isset($kindergarten_elementor_plugin['desc'])) {
                        $kindergarten_elementor_action['desc'] = $kindergarten_elementor_plugin['desc'];
                    }

                    $kindergarten_elementor_action['name'] = '';
                    if (isset($kindergarten_elementor_plugin['name'])) {
                        $kindergarten_elementor_action['title'] = $kindergarten_elementor_plugin['name'];
                    }

                    $kindergarten_elementor_link_and_is_done  = $this->kindergarten_elementor_get_plugin_buttion($kindergarten_elementor_plugin['slug'], $kindergarten_elementor_plugin['name'], $kindergarten_elementor_plugin['function']);
                    $kindergarten_elementor_action['link']    = $kindergarten_elementor_link_and_is_done['button'];
                    $kindergarten_elementor_action['is_done'] = $kindergarten_elementor_link_and_is_done['done'];
                    if (!$kindergarten_elementor_action['is_done'] && (!isset($kindergarten_elementor_actions_todo[$kindergarten_elementor_action['id']]) || !$kindergarten_elementor_actions_todo[$kindergarten_elementor_action['id']])) {
                        $kindergarten_elementor_act_count++;
                    }
                    $kindergarten_elementor_recommended_actions[] = $kindergarten_elementor_action;
                    $kindergarten_elementor_actions_todo[]        = array('id' => $kindergarten_elementor_action['id'], 'watch' => true);
                }
                return array('count' => $kindergarten_elementor_act_count, 'actions' => $kindergarten_elementor_recommended_actions);
            }

        }

        public function kindergarten_elementor_get_recommended_plugins() {

            $kindergarten_elementor_plugins = apply_filters('kindergarten_elementor_recommended_plugins', array());
            return $kindergarten_elementor_plugins;
        }

        public function kindergarten_elementor_get_plugin_buttion($slug, $name, $function) {
                $kindergarten_elementor_is_done      = false;
                $kindergarten_elementor_button_html  = '';
                $kindergarten_elementor_is_installed = $this->is_plugin_installed($slug);
                $kindergarten_elementor_plugin_path  = $this->get_plugin_basename_from_slug($slug);
                $kindergarten_elementor_is_activeted = (class_exists($function)) ? true : false;
                if (!$kindergarten_elementor_is_installed) {
                    $kindergarten_elementor_plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $kindergarten_elementor_plugin_install_url = wp_nonce_url($kindergarten_elementor_plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $kindergarten_elementor_button_html        = sprintf('<a class="kindergarten-elementor-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($kindergarten_elementor_plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'kindergarten-elementor'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'kindergarten-elementor')
                    );
                } elseif ($kindergarten_elementor_is_installed && !$kindergarten_elementor_is_activeted) {

                    $kindergarten_elementor_plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($kindergarten_elementor_plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $kindergarten_elementor_plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $kindergarten_elementor_button_html = sprintf('<a class="kindergarten-elementor-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($kindergarten_elementor_plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'kindergarten-elementor'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'kindergarten-elementor')
                    );
                } elseif ($kindergarten_elementor_is_activeted) {
                    $kindergarten_elementor_button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'kindergarten-elementor'));
                    $kindergarten_elementor_is_done     = true;
                }

                return array('done' => $kindergarten_elementor_is_done, 'button' => $kindergarten_elementor_button_html);
            }
        public function is_plugin_installed($slug) {
            $kindergarten_elementor_installed_plugins = $this->get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $kindergarten_elementor_file_path         = $this->get_plugin_basename_from_slug($slug);
            return (!empty($kindergarten_elementor_installed_plugins[$kindergarten_elementor_file_path]));
        }
        public function get_plugin_basename_from_slug($slug) {
            $kindergarten_elementor_keys = array_keys($this->get_installed_plugins());
            foreach ($kindergarten_elementor_keys as $kindergarten_elementor_key) {
                if (preg_match('|^' . $slug . '/|', $kindergarten_elementor_key)) {
                    return $kindergarten_elementor_key;
                }
            }
            return $slug;
        }

        public function get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }
        public function create_pattern_setup_builder() {

            $edit_page = admin_url().'post-new.php?post_type=page&create_pattern=true';
            echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

            exit;
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Kindergarten_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();