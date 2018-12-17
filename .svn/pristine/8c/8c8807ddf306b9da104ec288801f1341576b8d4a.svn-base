<?php
/*
 Plugin Name: The Quran Radio
 Plugin URI: http://www.islam.com.kw
 Description: Quran Radio is the first WordPress plugin that allows you to add the translations of the Quran in 40 languages on posts, pages or widgets.
 Version: 3.12
 Author: EDC Team (E-Da`wah Committee)
 Author URI: http://www.islam.com.kw/DawahApps/
 Text Domain: the-quran-radio
 License: It is Free -_-
*/

require_once( plugin_dir_path( __FILE__ ) . '/radio-hook.php' );
require_once( plugin_dir_path( __FILE__ ) . '/radio-list.php' );
require_once( plugin_dir_path( __FILE__ ) . '/radio-widget.php' );

function EDC_content_replace($t){
	$text = preg_replace_callback("/radio\[([0-9]*?)\]/s", "get_radio", $t);
	return $text;
}
add_filter('the_content','EDC_content_replace');

function edc_radio_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'the-quran-radio' ) );
	}
	
	$Radio_Languages = radios_list();

	if(isset($_POST['submitted']) && $_POST['submitted'] == 1){
		if(isset($_POST['radio_key'])){ $radio_key = $_POST['radio_key']; }else{ $radio_key = ''; }
		if(isset($_POST['android'])){ $android = '1'; }else{ $android = ''; }
		if(isset($_POST['show_radio_url'])){ $show_radio_url = '1'; }else{ $show_radio_url = ''; }
		if(isset($_POST['show_radio_pdf'])){ $show_radio_pdf = '1'; }else{ $show_radio_pdf = ''; }
		if(isset($_POST['show_radio_podcast'])){ $show_radio_podcast = '1'; }else{ $show_radio_podcast = ''; }
		if(isset($_POST['show_radio_alllinks'])){ $show_radio_alllinks = '1'; }else{ $show_radio_alllinks = ''; }
		if(isset($_POST['show_radio_MediaPlayer'])){ $show_radio_MediaPlayer = '1'; }else{ $show_radio_MediaPlayer = ''; }
		if(isset($_POST['show_radio_QuickTime'])){ $show_radio_QuickTime = '1'; }else{ $show_radio_QuickTime = ''; }
		if(isset($_POST['show_radio_realplayer'])){ $show_radio_realplayer = '1'; }else{ $show_radio_realplayer = ''; }
		if(isset($_POST['show_radio_Winamp'])){ $show_radio_Winamp = '1'; }else{ $show_radio_Winamp = ''; }
		if(isset($_POST['show_radio_appstore'])){ $show_radio_appstore = '1'; }else{ $show_radio_appstore = ''; }
		if(isset($_POST['show_radio_tunein'])){ $show_radio_tunein = '1'; }else{ $show_radio_tunein = ''; }
		if(isset($_POST['show_radio_soundcloud'])){ $show_radio_soundcloud = '1'; }else{ $show_radio_soundcloud = ''; }
		if(isset($_POST['show_radio_twitter'])){ $show_radio_twitter = '1'; }else{ $show_radio_twitter = ''; }
		if(isset($_POST['show_radio_facebook'])){ $show_radio_facebook = '1'; }else{ $show_radio_facebook = ''; }
		if(isset($_POST['show_radio_android'])){ $show_radio_android = '1'; }else{ $show_radio_android = ''; }
		if(isset($_POST['check_autostart'])){ $show_autostart = '1'; }else{ $show_autostart = ''; }
		if(isset($_POST['hidden_radio_player'])){ $hidden_radio_player = '1'; }else{ $hidden_radio_player = ''; }

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
			update_option( 'show_radio_soundcloud', $show_radio_soundcloud );
			update_option( 'show_radio_twitter', $show_radio_twitter );
			update_option( 'show_radio_facebook', $show_radio_facebook );
			update_option( 'show_radio_android', $show_radio_android );
			update_option( 'check_autostart', $show_autostart );
			update_option( 'radio_title', addslashes($_POST['radio_title']) );
			update_option( 'radio_player', addslashes($_POST['radio_player']) );
			update_option( 'hidden_radio_player', $hidden_radio_player );
		}else{
			add_option( 'radio_key', $radio_key, null );
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
			add_option( 'hidden_radio_player', '0', null );
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
								<p><input id="check_autostart" type="checkbox" name="check_autostart"<?php echo ( get_option('check_autostart') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Auto Start', 'the-quran-radio'); ?></p>
							</div>
							
							<div class="form-field">
								<h2><?php _e('Show Icons:', 'the-quran-radio'); ?></h2>
								<p><input id="show_radio_url" type="checkbox" name="show_radio_url"<?php echo ( get_option('show_radio_url') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Source Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_pdf" type="checkbox" name="show_radio_pdf"<?php echo ( get_option('show_radio_pdf') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('PDF Book Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_podcast" type="checkbox" name="show_radio_podcast"<?php echo ( get_option('show_radio_podcast') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Podcast Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_alllinks" type="checkbox" name="show_radio_alllinks"<?php echo ( get_option('show_radio_alllinks') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Download Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_MediaPlayer" type="checkbox" name="show_radio_MediaPlayer"<?php echo ( get_option('show_radio_MediaPlayer') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('MediaPlayer Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_QuickTime" type="checkbox" name="show_radio_QuickTime"<?php echo ( get_option('show_radio_QuickTime') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('QuickTime Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_realplayer" type="checkbox" name="show_radio_realplayer"<?php echo ( get_option('show_radio_realplayer') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Realplayer Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_Winamp" type="checkbox" name="show_radio_Winamp"<?php echo ( get_option('show_radio_Winamp') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Winamp Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_tunein" type="checkbox" name="show_radio_tunein"<?php echo ( get_option('show_radio_tunein') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Tunein Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_soundcloud" type="checkbox" name="show_radio_soundcloud"<?php echo ( get_option('show_radio_soundcloud') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Soundcloud Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_twitter" type="checkbox" name="show_radio_twitter"<?php echo ( get_option('show_radio_twitter') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Twitter Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_facebook" type="checkbox" name="show_radio_facebook"<?php echo ( get_option('show_radio_facebook') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Facebook Icon', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_android" type="checkbox" name="show_radio_android"<?php echo ( get_option('show_radio_android') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Android Icon', 'the-quran-radio'); ?></p>
								<p><input id="hidden_radio_player" type="checkbox" name="hidden_radio_player"<?php echo ( get_option('hidden_radio_player') == '1' ? ' checked="checked"' : '' ); ?>> <?php _e('Hidden Player', 'the-quran-radio'); ?></p>
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
