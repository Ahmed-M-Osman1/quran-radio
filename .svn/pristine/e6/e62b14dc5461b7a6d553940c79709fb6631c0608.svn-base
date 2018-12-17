<?php
/*
 Plugin Name: The Quran Radio
 Plugin URI: http://www.islam.com.kw
 Description: Quran Radio is the first WordPress plugin that allows you to add the translations of the Quran in 40 languages on posts, pages or widgets.
 Version: 2.9
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
     add_option( 'edc_radio_form', '', '', 'yes' ); 
}
register_activation_hook(__FILE__,'edc_radio_plugin_install'); 

function edc_radio_plugin_scripts(){
     wp_register_script('edc_radio_plugin_scripts',plugin_dir_url( __FILE__ ).'js/jwplayer/jwplayer.js');
     wp_enqueue_script('edc_radio_plugin_scripts');
}
add_action('wp_enqueue_scripts','edc_radio_plugin_scripts'); 

function edc_radio_plugin_styles() {
	wp_register_style( 'edc-radio-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'edc-radio-styles' );
}
add_action( 'wp_enqueue_scripts', 'edc_radio_plugin_styles' );

function edc_adminHeader() {
	echo "<style type=\"text/css\" media=\"screen\">\n";
	echo "#quran-radio { background:#fff; margin:0; text-align:center; border:1px solid #cccccc; padding:5px; margin-top:15px; }\n";
	echo "#quran-radio .lang { padding:5px 0 5px 0; margin:5px 0 10px 0; }\n";
	echo "#quran-radio .playericons { padding:5px 0 5px 0; margin:5px 0 0 0; }\n";
	echo "#quran-radio .playericons img { border:none; width:24px; height:24px; padding:0; margin:0 2px 0 2px; }\n";
	do_action('edc_css');
	echo "</style>\n";
}

add_action('admin_head','edc_adminHeader');

function get_radio($id,$shownotes=0){
global $post, $Radio_Languages;
$rands = rand(0,999);
$languagescount = count($Radio_Languages);
if($id > $languagescount){
	$code = '<p style="border:1px solid #cccccc; text-align:center; padding:10px;">Error ID!</p>';
}else{
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

	$icons = '';

	if(get_option('show_radio_url') == 'on'){
		if(isset($Radio_Languages[$id]['url'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['url'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/url.png" alt="Source" title="Source" /></a>'; }
	}
	if(get_option('show_radio_pdf') == 'on'){
		if(isset($Radio_Languages[$id]['book'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['book'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/pdf.png" alt="PDF Book" title="PDF Book" /></a>'; }
	}
	if(get_option('show_radio_podcast') == 'on'){
		if(isset($Radio_Languages[$id]['podcast'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['podcast'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/podcast.png" alt="Podcast" title="Podcast" /></a>'; }
	}
	if(get_option('show_radio_alllinks') == 'on'){
		if(isset($Radio_Languages[$id]['txt'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['txt'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/alllinks.png" alt="Download all files" title="Download all files" /></a>'; }
	}
	if(get_option('show_radio_MediaPlayer') == 'on'){
		if(isset($Radio_Languages[$id]['asx'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['asx'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/MediaPlayer.png" alt="Tune in MediaPlayer" title="Tune in MediaPlayer" /></a>'; }
	}
	if(get_option('show_radio_QuickTime') == 'on'){
		if(isset($Radio_Languages[$id]['qtl'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['qtl'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/QuickTime.png" alt="Tune in QuickTime" title="Tune in QuickTime" /></a>'; }
	}
	if(get_option('show_radio_realplayer') == 'on'){
		if(isset($Radio_Languages[$id]['ram'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['ram'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/realplayer.png" alt="Tune in RealPlayer" title="Tune in RealPlayer" /></a>'; }
	}
	if(get_option('show_radio_Winamp') == 'on'){
		if(isset($Radio_Languages[$id]['pls'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['pls'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/Winamp.png" alt="Tune in Winamp" title="Tune in Winamp" /></a>'; }
	}
	if(get_option('show_radio_tunein') == 'on'){
		if(isset($Radio_Languages[$id]['tunein'])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id]['tunein'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/tunein.png" alt="tunein" title="tunein" /></a>'; }
	}
	
	$code = '<div id="quran-radio">';
	if(get_option('radio_title') == ""){
		$radio_title = $Radio_Languages[$id]['title'];
	}else{
		$radio_title = htmlentities(strip_tags(get_option('radio_title')));
	}

	if(get_option('check_autostart') == "on"){
		$autostart = 'true';
	}else{
		$autostart = 'false';
	}

	if(get_option('radio_width') == ""){
		$radio_width = 328;
	}else{
		$radio_width = intval(get_option('radio_width'));
	}

	if(get_option('radio_height') == ""){
		$radio_height = 20;
	}else{
		$radio_height = intval(get_option('radio_height'));
	}

	$code .= '<div class="lang">'.$radio_title.'</div>'."\n";
	if($shownotes == 1){
		$code .= '<script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/jwplayer/jwplayer.js"></script>'."\n";
	}

	if(isset($post->ID)){
		$post_title = get_the_title( $post->ID );
	}else{
		$post_title = $Radio_Languages[$id]['title'];
	}

	$code .= '<div style="width:100%; margin:5px 0 5px 0;">'."\n";
	$code .= '<audio controls="controls" autoplay="autoplay" src="'.$Radio_Languages[$id]['radio'].'/;*.mp3"></audio>';
	$code .= '</div>';
	if($icons != ""){
		$code .= '<div style="padding:7px 0 7px 0; text-align:center;"><div class="playericons">'.$icons.'</div></div>';
	}
	if($shownotes == 1){
		$code .= '<div style="padding:7px 0 7px 0;">'. __('Copy this code', 'the-quran-radio') .' <span style="color:#0000ff;">radio['.$id.']</span> '. __('and past in post or page', 'the-quran-radio') .'</div>';
	}
	$code .= '</div>';
}
return $code;
} 

function EDC_content_replace ($text){
$text = preg_replace('/radio\[([0-9]*?)\]/e','get_radio(\\1)',$text);
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
		$option_name = 'edc_radio_form';
		$new_value = $_POST['edc_radio_form'];
		//$radio_width = $_POST['radio_width'];
		$radio_height = $_POST['radio_height'];

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

		if( get_option( $option_name ) !== false ){
			update_option( $option_name, $new_value );
			update_option( 'android', $android );
			update_option( 'edc_radio_id', 0 );
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
			//update_option( 'radio_width', intval($_POST['radio_width']) );
			update_option( 'radio_height', intval($_POST['radio_height']) );
		}else{
			add_option( $option_name, $new_value, null );
			add_option( 'android', 'on', null );
			add_option( 'edc_radio_id', '0', null );
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
			add_option( 'radio_width', '328', null );
			add_option( 'radio_height', '20', null );
		}
	}

	if(get_option('android') == 'on'){ $check_1 = 'checked="checked"'; }else{ $check_1 = ''; }
	if(get_option('show_radio_url') == 'on'){ $check_show_radio_url = 'checked="checked"'; }else{ $check_show_radio_url = ''; }
	if(get_option('show_radio_pdf') == 'on'){ $check_show_radio_pdf = 'checked="checked"'; }else{ $check_show_radio_pdf = ''; }
	if(get_option('show_radio_podcast') == 'on'){ $check_show_radio_podcast = 'checked="checked"'; }else{ $check_show_radio_podcast = ''; }
	if(get_option('show_radio_alllinks') == 'on'){ $check_show_radio_alllinks = 'checked="checked"'; }else{ $check_show_radio_alllinks = ''; }
	if(get_option('show_radio_MediaPlayer') == 'on'){ $check_show_radio_MediaPlayer = 'checked="checked"'; }else{ $check_show_radio_MediaPlayer = ''; }
	if(get_option('show_radio_QuickTime') == 'on'){ $check_show_radio_QuickTime = 'checked="checked"'; }else{ $check_show_radio_QuickTime = ''; }
	if(get_option('show_radio_realplayer') == 'on'){ $check_show_radio_realplayer = 'checked="checked"'; }else{ $check_show_radio_realplayer = ''; }
	if(get_option('show_radio_Winamp') == 'on'){ $check_show_radio_Winamp = 'checked="checked"'; }else{ $check_show_radio_Winamp = ''; }
	if(get_option('show_radio_appstore') == 'on'){ $check_show_radio_appstore = 'checked="checked"'; }else{ $check_show_radio_appstore = ''; }
	if(get_option('show_radio_tunein') == 'on'){ $check_show_radio_tunein = 'checked="checked"'; }else{ $check_show_radio_tunein = ''; }
	if(get_option('show_radio_android') == 'on'){ $check_show_radio_android = 'checked="checked"'; }else{ $check_show_radio_android = ''; }
	if(get_option('check_autostart') == 'on'){ $check_autostart = 'checked="checked"'; }else{ $check_autostart = ''; }
	$radio_title = strip_tags(get_option('radio_title'));
	//$radio_width = intval(get_option('radio_width'));
	$radio_height = intval(get_option('radio_height'));
	?>
	<div class="wrap nosubsub">
		<h1><?php _e('Quran Radio Setting', 'the-quran-radio'); ?></h1>
		<div id="col-container">

			<div id="col-right">
				<div class="col-wrap">
					<div class="form-wrap">
						<?php echo get_radio(get_option('edc_radio_form'),1); ?>
					</div>
				</div>
			</div>
			
			<div id="col-left">
				<div class="col-wrap">
					<div class="form-wrap">
						<form name="sytform" action="" method="post">
							<input type="hidden" name="submitted" value="1" />

							<div class="form-field">
								<label for="edc_radio_form"><?php _e('Select Language', 'the-quran-radio'); ?></label>
								<select name="edc_radio_form" id="edc_radio_form" style="width:100%;">
									<?php foreach($Radio_Languages as $k => $v){ ?>
										<option value="<?php echo $k; ?>" <?php echo ( get_option('edc_radio_form') == $k ) ? 'selected="yes"' : ''; ?>><?php echo $k.'- '.$v['title']; ?></option>
									<?php } ?>
								</select>
							</div>
			
							<div class="form-field">
								<label for="radio_title"><?php _e('Radio Title', 'the-quran-radio'); ?></label>
								<input id="radio_title" type="text" name="radio_title" value="<?php echo htmlentities($radio_title); ?>" />
								<p><?php _e('if empty will write language title.', 'the-quran-radio'); ?></p>
							</div>

							<div class="form-field">
								<h2><?php _e('Player Options:', 'the-quran-radio'); ?></h2>
							<!--
								<p><input id="radio_width" type="text" name="radio_width" value="<?php echo intval($radio_width); ?>" /> <?php _e('Player width', 'the-quran-radio'); ?></p>
							-->
								<p><label for="radio_height"><?php _e('Player height', 'the-quran-radio'); ?></label>
								<input id="radio_height" type="text" name="radio_height" value="<?php echo intval($radio_height); ?>" /></p>
								<p><input id="autostart" type="checkbox" name="check_autostart" <?php echo $check_autostart; ?> /> <?php _e('Autostart', 'the-quran-radio'); ?></p>
							</div>
							
							<div class="form-field">
								<h2><?php _e('Show Icons:', 'the-quran-radio'); ?></h2>
								<p><input id="show_radio_url" type="checkbox" name="show_radio_url" <?php echo $check_show_radio_url; ?> /> <?php _e('Source', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_pdf" type="checkbox" name="show_radio_pdf" <?php echo $check_show_radio_pdf; ?> /> <?php _e('PDF Book', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_podcast" type="checkbox" name="show_radio_podcast" <?php echo $check_show_radio_podcast; ?> /> <?php _e('Podcast', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_alllinks" type="checkbox" name="show_radio_alllinks" <?php echo $check_show_radio_alllinks; ?> /> <?php _e('Download', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_MediaPlayer" type="checkbox" name="show_radio_MediaPlayer" <?php echo $check_show_radio_MediaPlayer; ?> /> <?php _e('MediaPlayer', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_QuickTime" type="checkbox" name="show_radio_QuickTime" <?php echo $check_show_radio_QuickTime; ?> /> <?php _e('QuickTime', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_realplayer" type="checkbox" name="show_radio_realplayer" <?php echo $check_show_radio_realplayer; ?> /> <?php _e('Realplayer', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_Winamp" type="checkbox" name="show_radio_Winamp" <?php echo $check_show_radio_Winamp; ?> /> <?php _e('Winamp', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_tunein" type="checkbox" name="show_radio_tunein" <?php echo $check_show_radio_tunein; ?> /> <?php _e('Tunein', 'the-quran-radio'); ?></p>
								<p><input id="show_radio_android" type="checkbox" name="show_radio_android" <?php echo $check_show_radio_android; ?> /> <?php _e('Android', 'the-quran-radio'); ?></p>
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
