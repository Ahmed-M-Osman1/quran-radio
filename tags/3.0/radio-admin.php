<?php
/*
 Plugin Name: The Quran Radio
 Plugin URI: http://www.islam.com.kw
 Description: Quran Radio is the first WordPress plugin that allows you to add the translations of the Quran in 40 languages on posts, pages or widgets.
 Version: 3.0
 Author: EDC Team (E-Da`wah Committee)
 Author URI: http://www.islam.com.kw/DawahApps/
 Text Domain: the-quran-radio
 License: It is Free -_-
*/

include('radio-playlist.php');

add_action('plugins_loaded', 'quran_radio_load_textdomain');
function quran_radio_load_textdomain() {
	load_plugin_textdomain( 'the-quran-radio', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

function edc_radio_plugin_install(){
	add_option( 'radio_key', null ); 
	add_option( 'android', 'on', null );
	add_option( 'show_radio_url', 'on', null );
	add_option( 'show_radio_pdf', 'on', null );
	add_option( 'show_radio_podcast', 'on', null );
	add_option( 'show_radio_alllinks', 'on', null );
	add_option( 'show_radio_MediaPlayer', 'on', null );
	add_option( 'show_radio_QuickTime', 'on', null );
	add_option( 'show_radio_realplayer', 'on', null );
	add_option( 'show_radio_Winamp', 'on', null );
	add_option( 'show_radio_appstore', 'on', null );
	add_option( 'show_radio_tunein', 'on', null );
	add_option( 'show_radio_android', 'on', null );
	add_option( 'check_autostart', 'on', null );
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

function EDC_content_replace($t){
	$text = preg_replace_callback("/radio\[([0-9]*?)\]/s", "get_radio", $t);
	return $text;
}
add_filter('the_content','EDC_content_replace');

add_action( 'admin_menu', 'edc_plugin_menu' );

function edc_plugin_menu() {
	add_menu_page( __('Quran Radio', 'the-quran-radio'), __('Quran Radio', 'the-quran-radio'), 'manage_options', 'edc-radio-edit', 'edc_radio_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/i/radio.png' );
}

function edc_radio_options() {
	global $Radio_Languages;
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'the-quran-radio' ) );
	}

	if(isset($_POST['submitted']) && $_POST['submitted'] == 1){
		if(isset($_POST['radio_key'])){ $radio_key = $_POST['radio_key']; }else{ $radio_key = ''; }
		if(isset($_POST['android'])){ $android = 'on'; }else{ $android = 'off'; }
		if(isset($_POST['show_radio_url'])){ $show_radio_url = 'on'; }else{ $show_radio_url = 'off'; }
		if(isset($_POST['show_radio_pdf'])){ $show_radio_pdf = 'on'; }else{ $show_radio_pdf = 'off'; }
		if(isset($_POST['show_radio_podcast'])){ $show_radio_podcast = 'on'; }else{ $show_radio_podcast = 'off'; }
		if(isset($_POST['show_radio_alllinks'])){ $show_radio_alllinks = 'on'; }else{ $show_radio_alllinks = 'off'; }
		if(isset($_POST['show_radio_MediaPlayer'])){ $show_radio_MediaPlayer = 'on'; }else{ $show_radio_MediaPlayer = 'off'; }
		if(isset($_POST['show_radio_QuickTime'])){ $show_radio_QuickTime = 'on'; }else{ $show_radio_QuickTime = 'off'; }
		if(isset($_POST['show_radio_realplayer'])){ $show_radio_realplayer = 'on'; }else{ $show_radio_realplayer = 'off'; }
		if(isset($_POST['show_radio_Winamp'])){ $show_radio_Winamp = 'on'; }else{ $show_radio_Winamp = 'off'; }
		if(isset($_POST['show_radio_appstore'])){ $show_radio_appstore = 'on'; }else{ $show_radio_appstore = 'off'; }
		if(isset($_POST['show_radio_tunein'])){ $show_radio_tunein = 'on'; }else{ $show_radio_tunein = 'off'; }
		if(isset($_POST['show_radio_android'])){ $show_radio_android = 'on'; }else{ $show_radio_android = 'off'; }
		if(isset($_POST['check_autostart'])){ $show_autostart = 'on'; }else{ $show_autostart = 'off'; }

		if( get_option( 'radio_key' ) !== false ){
			update_option( 'radio_key', $radio_key );
			update_option( 'android', $android );
			update_option( 'show_radio_url', $show_radio_url );
			update_option( 'show_radio_pdf', $show_radio_pdf );
			update_option( 'show_radio_podcast', $show_radio_podcast );
			update_option( 'show_radio_alllinks', $show_radio_alllinks );
			update_option( 'show_radio_MediaPlayer', $show_radio_MediaPlayer );
			update_option( 'show_radio_QuickTime', $show_radio_QuickTime );
			update_option( 'show_radio_realplayer', $show_radio_realplayer );
			update_option( 'show_radio_Winamp', $show_radio_Winamp );
			update_option( 'show_radio_appstore', $show_radio_appstore );
			update_option( 'show_radio_tunein', $show_radio_tunein );
			update_option( 'show_radio_android', $show_radio_android );
			update_option( 'check_autostart', $show_autostart );
			update_option( 'radio_title', addslashes($_POST['radio_title']) );
			update_option( 'radio_player', addslashes($_POST['radio_player']) );
		}else{
			add_option( 'radio_key', $radio_key, null );
			add_option( 'android', 'on', null );
			add_option( 'show_radio_url', 'on', null );
			add_option( 'show_radio_pdf', 'on', null );
			add_option( 'show_radio_podcast', 'on', null );
			add_option( 'show_radio_alllinks', 'on', null );
			add_option( 'show_radio_MediaPlayer', 'on', null );
			add_option( 'show_radio_QuickTime', 'on', null );
			add_option( 'show_radio_realplayer', 'on', null );
			add_option( 'show_radio_Winamp', 'on', null );
			add_option( 'show_radio_appstore', 'on', null );
			add_option( 'show_radio_tunein', 'on', null );
			add_option( 'show_radio_android', 'on', null );
			add_option( 'check_autostart', 'on', null );
			add_option( 'radio_title', '', null );
			add_option( 'radio_player', 'html5', null );
		}
	}
	?>
	<div class="wrap nosubsub">
		<h1><?php _e('Quran Radio Setting', 'the-quran-radio'); ?></h1>
		<div id="col-container">

			<div id="col-right">
				<div class="col-wrap">
					<div class="form-wrap">
						<?php echo get_radio(get_option('radio_key'), 1); ?>
					</div>
				</div>
			</div>
			
			<div id="col-left">
				<div class="col-wrap">
					<div class="form-wrap">
						<form name="sytform" action="" method="post">
							<input type="hidden" name="submitted" value="1" />

							<div class="form-field">
								<label for="radio_key"><?php _e('Select Language', 'the-quran-radio'); ?></label>
								<select name="radio_key" id="radio_key" style="width:100%;">
									<?php foreach($Radio_Languages as $k => $v){ ?>
										<option value="<?php echo $k; ?>" <?php echo ( get_option('radio_key') == $k ) ? 'selected="yes"' : ''; ?>><?php echo $k.'- '.$v['title']; ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-field">
								<label for="radio_title"><?php _e('Radio Title', 'the-quran-radio'); ?></label>
								<input id="radio_title" type="text" name="radio_title" value="<?php echo htmlentities(get_option('radio_title')); ?>" />
								<p><?php _e('if empty will write language title.', 'the-quran-radio'); ?></p>
							</div>

							<div class="form-field">
								<h2><?php _e('Player Options:', 'the-quran-radio'); ?></h2>
								<p><label for="radio_player"><?php _e('Player Type', 'the-quran-radio'); ?></label>
								<select id="radio_player" name="radio_player">
								<option value="html5"<?php echo ( get_option('radio_player') == 'html5' ) ? ' selected="selected"' : ''; ?>>HTML5</option>
								<option value="jplayer"<?php echo ( get_option('radio_player') == 'jplayer' ) ? ' selected="selected"' : ''; ?>>JPlayer</option>
								</select></p>
								<p><input id="check_autostart" type="checkbox" name="check_autostart"<?php echo ( get_option('check_autostart') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Auto Start', 'the-quran-radio'); ?></p>
							</div>
							
							<div class="form-field">
								<h2><?php _e('Show Icons:', 'the-quran-radio'); ?></h2>
								<p><input id="show_radio_url" type="checkbox" name="show_radio_url"<?php echo ( get_option('show_radio_url') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Source', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_pdf" type="checkbox" name="show_radio_pdf"<?php echo ( get_option('show_radio_pdf') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('PDF Book', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_podcast" type="checkbox" name="show_radio_podcast"<?php echo ( get_option('show_radio_podcast') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Podcast', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_alllinks" type="checkbox" name="show_radio_alllinks"<?php echo ( get_option('show_radio_alllinks') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Download', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_MediaPlayer" type="checkbox" name="show_radio_MediaPlayer"<?php echo ( get_option('show_radio_MediaPlayer') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('MediaPlayer', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_QuickTime" type="checkbox" name="show_radio_QuickTime"<?php echo ( get_option('show_radio_QuickTime') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('QuickTime', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_realplayer" type="checkbox" name="show_radio_realplayer"<?php echo ( get_option('show_radio_realplayer') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Realplayer', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_Winamp" type="checkbox" name="show_radio_Winamp"<?php echo ( get_option('show_radio_Winamp') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Winamp', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_tunein" type="checkbox" name="show_radio_tunein"<?php echo ( get_option('show_radio_tunein') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Tunein', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_android" type="checkbox" name="show_radio_android"<?php echo ( get_option('show_radio_android') == 'on' ? ' checked="checked"' : '' ); ?>> <?php _e('Android', 'the-quran-radio'); ?></p>
							</div>
								
							<p class="submit"><input type="submit" name="Submit" id="submit" class="button button-primary" value="<?php _e('Update options', 'the-quran-radio'); ?>"  /></p>
							
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>
<?php
}
