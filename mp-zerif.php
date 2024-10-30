<?php
/*
 * Plugin Name: Zerif MotoPress Page Builder Integration
 * Description: Adds Zerif custom styles to all content elements added via powerful MotoPress Page Builder.
 * Version: 1.0.1
 * Author: MotoPress
 * Author URI: https://motopress.com/
 * License: GPLv2 or later
 * Text Domain: mp-zerif
 * Domain Path: /languages
 */


if ( ! class_exists( 'MP_Zerif_Plugin' ) ) :

	final class MP_Zerif_Plugin {

		/**
		 * The single instance of the class.
		 */
		protected static $_instance = null;
		
		private $prefix;

		/**
		 * Main MP_Zerif_Plugin Instance.
		 *
		 * Ensures only one instance is loaded or can be loaded.
		 *
		 * @since
		 * @static
		 * @see MP_Zerif_Plugin_Instance()
		 * @return MP_Zerif_Plugin - Main instance.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		public function __construct() {
			
			if ( $this->is_zerif_theme() ) {
				
				$this->prefix = 'mp_zerif';

				/*
				 *  Path to classes folder in Plugin
				 */
				defined( 'MP_ZENRIF_PLUGIN_INCLUDES_PATH' ) || define( 'MP_ZENRIF_PLUGIN_INCLUDES_PATH', plugin_dir_path( __FILE__ ) . 'includes/' );
				defined( 'MP_ZENRIF_PLUGIN_CSS_PATH' ) || define( 'MP_ZENRIF_PLUGIN_CSS_PATH', plugin_dir_url( __FILE__ ) . 'css/' );

				add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts_styles' ) );

				$this->include_files();
			}

			add_action( 'plugins_loaded', array( $this, 'mp_zerif_plugins_loaded' ) );
		}

		/**
		 * Load plugin textdomain.
		 *
		 * @access public
		 * @return void
		 */
		function mp_zerif_plugins_loaded() {
			load_plugin_textdomain( 'mp-zerif', false, basename( dirname( __FILE__ ) ) . '/languages/' );
		}

		/**
		 * Get prefix.
		 *
		 * @access public
		 * @return sting
		 */
		public function get_prefix() {
			return $this->prefix . '_';
		}

		/**
		 * Is theme zerif.
		 *
		 * @access public
		 * @return sting
		 */
		public function is_zerif_theme() {
			$info = wp_get_theme( get_template() );
			$name = $info->get( 'Name' );
			if ( $name === 'Zerif' || $name === 'Zerif Lite' ) {
				return true;
			}

			return false;
		}

		public function include_files() {
			/*
			 * Init motopress
			 */
			
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			
			if (is_plugin_active( 'motopress-content-editor/motopress-content-editor.php' ) ||
				is_plugin_active( 'motopress-content-editor-lite/motopress-content-editor.php' ) )
			{
				include_once MP_ZENRIF_PLUGIN_INCLUDES_PATH . 'motopress/MP_Zerif_MP_Motopress_Init.php';
				new MP_Zerif_MP_Motopress_Init( $this->get_prefix() );
			}
		}

		/**
		 * Enqueue scripts and styles
		 *
		 * @access public
		 * @return sting
		 */
		function enqueue_scripts_styles() {
			wp_register_style( $this->get_prefix() . 'style', MP_ZENRIF_PLUGIN_CSS_PATH . 'mp-zerif.min.css', '', '1.0.0', 'all' );
			wp_enqueue_style( $this->get_prefix() . 'style' );
		}

	}

	/**
	 * Main instance of MP_Zerif_Plugin_Instance.
	 *
	 * Returns the main instance of plugin to prevent the need to use globals.
	 *
	 * @since
	 * @return
	 */
	function MP_Zerif_Plugin_Instance() {
		return MP_Zerif_Plugin::instance();
	}

	/*
	 * Global for backwards compatibility.
	 */
	$GLOBALS['MP_Zerif_Plugin_Instance'] = MP_Zerif_Plugin_Instance();

endif;
                                
