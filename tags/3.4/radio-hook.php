<?php
add_action('plugins_loaded', 'quran_radio_load_textdomain');
function quran_radio_load_textdomain() {
	load_plugin_textdomain( 'the-quran-radio', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

function edc_radio_plugin_install(){
	add_option( 'radio_key', null ); 
	add_option( 'android', '1', null );
	add_option( 'show_radio_url', '1', null );
	add_option( 'show_radio_pdf', '1', null );
	add_option( 'show_radio_podcast', '1', null );
	add_option( 'show_radio_alllinks', '1', null );
	add_option( 'show_radio_MediaPlayer', '1', null );
	add_option( 'show_radio_QuickTime', '1', null );
	add_option( 'show_radio_realplayer', '1', null );
	add_option( 'show_radio_Winamp', '1', null );
	add_option( 'show_radio_appstore', '1', null );
	add_option( 'show_radio_tunein', '1', null );
	add_option( 'show_radio_soundcloud', '1', null );
	add_option( 'show_radio_twitter', '1', null );
	add_option( 'show_radio_facebook', '1', null );
	add_option( 'show_radio_android', '1', null );
	add_option( 'check_autostart', '1', null );
	add_option( 'radio_title', '', null );
	add_option( 'radio_player', 'html5', null );
}
register_activation_hook(__FILE__, 'edc_radio_plugin_install'); 

function edc_radio_enqueue($hook) {
	if ( $hook != 'toplevel_page_edc-radio-edit' ) {
        return;
    }
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-1.11.1.min.js', false, '1.11', false );
	wp_enqueue_script('jquery');

    wp_register_script('edc_radio_plugin_scripts', plugin_dir_url( __FILE__ ).'js/jplayer/jquery.jplayer.min.js');
    wp_enqueue_script('edc_radio_plugin_scripts');
    
	wp_register_style( 'edc-radio-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'edc-radio-styles' );
}
add_action( 'admin_enqueue_scripts', 'edc_radio_enqueue' );

function edc_radio_plugin_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-1.11.1.min.js', false, '1.11', false );
	wp_enqueue_script( 'jquery' );

	wp_register_script('edc_radio_plugin_scripts', plugin_dir_url( __FILE__ ).'js/jplayer/jquery.jplayer.min.js');
	wp_enqueue_script('edc_radio_plugin_scripts');

	wp_register_style( 'edc-radio-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'edc-radio-styles' );
}
add_action('wp_enqueue_scripts','edc_radio_plugin_scripts'); 

function edc_radio_plugin_styles() {
	wp_register_style( 'edc-radio-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'edc-radio-styles' );
}
add_action( 'wp_enqueue_scripts', 'edc_radio_plugin_styles' );

add_action( 'admin_menu', 'edc_plugin_menu' );
function edc_plugin_menu() {
	add_menu_page( __('Quran Radio', 'the-quran-radio'), __('Quran Radio', 'the-quran-radio'), 'manage_options', 'edc-radio-edit', 'edc_radio_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/i/radio.png' );
}
?>