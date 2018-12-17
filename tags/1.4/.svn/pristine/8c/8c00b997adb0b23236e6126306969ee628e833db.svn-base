<?php
/**
 * @package Quran Radio
 * @version 1.4
 */
/*
 Plugin Name: The Quran Radio
 Plugin URI: http://www.islam.com.kw/support
 Description: Quran Radio is the first WordPress plugin that allows you to add the translations of the Quran in 38 languages on posts, pages or widgets.
 Version: 1.4
 Author: EDC Team (E-Da`wah Committee)
 Author URI: http://www.islam.com.kw
 License: It is Free -_-
*/

include('radio-playlist.php');

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

add_action('init','edc_radio_plugin_init');


/* FUNCTIONS */

function edc_radio_plugin_init(){
     run_sub_process();
}

function run_sub_process(){
  
} 

function edc_adminHeader() {
	echo "<style type=\"text/css\" media=\"screen\">\n";
	echo "#quran-radio { float:right; width:50%; margin:0 auto; text-align:center; border:1px solid #cccccc; padding:5px; margin-top:15px; margin-right:15px; }\n";
	echo "#quran-radio .lang { padding:5px 0 5px 0; margin:5px 0 10px 0; }\n";
	echo "#quran-radio .playericons { padding:5px 0 5px 0; margin:5px 0 0 0; }\n";
	echo "#quran-radio .playericons img { border:none; width:24px; height:24px; padding:0; margin:0 2px 0 2px; }\n";
	do_action('edc_css');
	echo "</style>\n";
}

add_action('admin_head','edc_adminHeader');

function get_radio($id,$shownotes=0){
global $post, $Radio_Languages;
//$post_url = get_permalink( $post->ID );
$rands = rand(0,999);
$languagescount = count($Radio_Languages);
if($id > $languagescount){
$code = '<p style="border:1px solid #cccccc; text-align:center; padding:10px;">Error ID!</p>';
}else{
$icons = '<div class="playericons">';
if(isset($_POST['show_radio_url'])){ $show_radio_url = 'on'; }else{ $show_radio_url = 'off'; }
if(isset($_POST['show_radio_pdf'])){ $show_radio_pdf = 'on'; }else{ $show_radio_pdf = 'off'; }
if(isset($_POST['show_radio_podcast'])){ $show_radio_podcast = 'on'; }else{ $show_radio_podcast = 'off'; }
if(isset($_POST['show_radio_alllinks'])){ $show_radio_alllinks = 'on'; }else{ $show_radio_alllinks = 'off'; }
if(isset($_POST['show_radio_MediaPlayer'])){ $show_radio_MediaPlayer = 'on'; }else{ $show_radio_MediaPlayer = 'off'; }
if(isset($_POST['show_radio_QuickTime'])){ $show_radio_QuickTime = 'on'; }else{ $show_radio_QuickTime = 'off'; }
if(isset($_POST['show_radio_realplayer'])){ $show_radio_realplayer = 'on'; }else{ $show_radio_realplayer = 'off'; }
if(isset($_POST['show_radio_Winamp'])){ $show_radio_Winamp = 'on'; }else{ $show_radio_Winamp = 'off'; }
if(isset($_POST['show_radio_appstore'])){ $show_radio_appstore = 'on'; }else{ $show_radio_appstore = 'off'; }
if(isset($_POST['show_radio_android'])){ $show_radio_android = 'on'; }else{ $show_radio_android = 'off'; }

if(get_option('show_radio_url') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][13])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][13].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/url.png" alt="Source" title="Source" /></a>'; }
}
if(get_option('show_radio_pdf') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][2])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][2].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/pdf.png" alt="PDF Book" title="PDF Book" /></a>'; }
}
if(get_option('show_radio_podcast') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][4])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][4].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/podcast.png" alt="Podcast" title="Podcast" /></a>'; }
}
if(get_option('show_radio_alllinks') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][5])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][5].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/alllinks.png" alt="Download all files" title="Download all files" /></a>'; }
}
if(get_option('show_radio_MediaPlayer') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][6])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][6].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/MediaPlayer.png" alt="Tune in MediaPlayer" title="Tune in MediaPlayer" /></a>'; }
}
if(get_option('show_radio_QuickTime') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][7])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][7].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/QuickTime.png" alt="Tune in QuickTime" title="Tune in QuickTime" /></a>'; }
}
if(get_option('show_radio_realplayer') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][8])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][8].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/realplayer.png" alt="Tune in RealPlayer" title="Tune in RealPlayer" /></a>'; }
}
if(get_option('show_radio_Winamp') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][9])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][9].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/Winamp.png" alt="Tune in Winamp" title="Tune in Winamp" /></a>'; }
}
if(get_option('show_radio_appstore') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][11])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][11].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/appstore.png" alt="Appstore" title="Appstore" /></a>'; }
}
if(get_option('show_radio_android') == 'on'){
$showicons = 1;
if(!empty($Radio_Languages[$id][12])){ $icons .= '<a target="_blank" href="'.$Radio_Languages[$id][12].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/android.png" alt="Android" title="Android" /></a>'; }
}
$icons .= '</div>';
	
$code = '<div id="quran-radio">';
if(get_option('radio_title') == ""){
$radio_title = 'Qur\'an recitation with '.$Radio_Languages[$id][0];
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

$code .= '<div style="width:100%; margin:5px 0 5px 0;">'."\n";
$code .= '<div id="radio_container_'.$rands.'">Loading the player...</div>
<script type="text/javascript">
	jwplayer("radio_container_'.$rands.'").setup({
		file: "'.$Radio_Languages[$id][10].'/;*.mp3",
		autostart: '.$autostart.',
		type: "audio/mpeg",
		width: "100%",
		height: '.$radio_height.',
		title: "'.$radio_title.'",
		controls: true,
	});
</script>';
$code .= '</div>';
if($showicons == 1){
$code .= '<div style="padding:7px 0 7px 0;  text-align:center;">'.$icons.'</div>';
}
if($shownotes == 1){
$code .= '<div style="padding:7px 0 7px 0;">Copy this code <span style="color:#0000ff;">radio['.$id.']</span> and past in post or page.</div>';
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
	add_menu_page( 'Quran Radio', 'Quran Radio', 'manage_options', 'edc-radio-edit', 'edc_radio_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/i/radio.png' );
}

function edc_radio_options() {
	global $Radio_Languages;
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
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
if(isset($_POST['show_radio_android'])){ $show_radio_android = 'on'; }else{ $show_radio_android = 'off'; }
if(isset($_POST['check_autostart'])){ $show_autostart = 'on'; }else{ $show_autostart = 'off'; }

if ( get_option( $option_name ) !== false ) {
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
	update_option( 'show_radio_android', $show_radio_android );
	update_option( 'check_autostart', $show_autostart );
	update_option( 'radio_title', addslashes($_POST['radio_title']) );
	//update_option( 'radio_width', intval($_POST['radio_width']) );
	update_option( 'radio_height', intval($_POST['radio_height']) );
} else {
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
if(get_option('show_radio_android') == 'on'){ $check_show_radio_android = 'checked="checked"'; }else{ $check_show_radio_android = ''; }
if(get_option('check_autostart') == 'on'){ $check_autostart = 'checked="checked"'; }else{ $check_autostart = ''; }
$radio_title = strip_tags(get_option('radio_title'));
//$radio_width = intval(get_option('radio_width'));
$radio_height = intval(get_option('radio_height'));

?>
	<div id="mainblock" class="submit">
			<div class="dbx-content">				
				<h2>Quran Radio</h2>
				<br />
				<form name="sytform" action="" method="post">
					<input type="hidden" name="submitted" value="1" />
					<h3>Select Language:</h3>
					<div>
							<label for="edc_radio_form">Languages:</label>
						<select name="edc_radio_form" id="edc_radio_form">
							<?php for($i = 1; $i <= count($Radio_Languages); $i++): ?>
								<option title="<?php echo $Radio_Languages[$i][0]; ?>" value="<?php echo $i; ?>" <?php echo ( get_option('edc_radio_form') == $i ) ? 'selected="yes"' : ''; ?>><?php echo $i.'- '.$Radio_Languages[$i][1]; ?></option>
							<?php endfor; ?>
						</select>
	<?php echo get_radio(get_option('edc_radio_form'),1); ?>
					</div>
	
					<h3>Radio Title:</h3>
					<div>
						<input id="radio_title" type="text" name="radio_title" value="<?php echo htmlentities($radio_title); ?>" />
						<label for="radio_title">if empty will write language title.</label>
					</div>
					
					<h3>Player Options:</h3>
					<!--
					<div>
						<input id="radio_width" type="text" name="radio_width" value="<?php echo intval($radio_width); ?>" />
						<label for="radio_width">Player width.</label>
					</div>
					-->
					<div>
						<input id="radio_height" type="text" name="radio_height" value="<?php echo intval($radio_height); ?>" />
						<label for="radio_height">Player height.</label>
					</div>
					<div>
						<input id="autostart" type="checkbox" name="check_autostart" <?php echo $check_autostart; ?> />
						<label for="autostart">Autostart</label>
					</div>
					
					<h3>Show Icons:</h3>
					<div>
						<input id="show_radio_url" type="checkbox" name="show_radio_url" <?php echo $check_show_radio_url; ?> />
						<label for="show_radio_url">Source</label>
					</div>
					<div>
						<input id="show_radio_pdf" type="checkbox" name="show_radio_pdf" <?php echo $check_show_radio_pdf; ?> />
						<label for="show_radio_pdf">PDF Book</label>
					</div>
					<div>
						<input id="show_radio_podcast" type="checkbox" name="show_radio_podcast" <?php echo $check_show_radio_podcast; ?> />
						<label for="show_radio_podcast">Podcast</label>
					</div>
					<div>
						<input id="show_radio_alllinks" type="checkbox" name="show_radio_alllinks" <?php echo $check_show_radio_alllinks; ?> />
						<label for="show_radio_alllinks">Download</label>
					</div>
					<div>
						<input id="show_radio_MediaPlayer" type="checkbox" name="show_radio_MediaPlayer" <?php echo $check_show_radio_MediaPlayer; ?> />
						<label for="show_radio_MediaPlayer">MediaPlayer</label>
					</div>
					<div>
						<input id="show_radio_QuickTime" type="checkbox" name="show_radio_QuickTime" <?php echo $check_show_radio_QuickTime; ?> />
						<label for="show_radio_QuickTime">QuickTime</label>
					</div>
					<div>
						<input id="show_radio_realplayer" type="checkbox" name="show_radio_realplayer" <?php echo $check_show_radio_realplayer; ?> />
						<label for="show_radio_realplayer">Realplayer</label>
					</div>
					<div>
						<input id="show_radio_Winamp" type="checkbox" name="show_radio_Winamp" <?php echo $check_show_radio_Winamp; ?> />
						<label for="show_radio_Winamp">Winamp</label>
					</div>
					<div>
						<input id="show_radio_appstore" type="checkbox" name="show_radio_appstore" <?php echo $check_show_radio_appstore; ?> />
						<label for="show_radio_appstore">Appstore</label>
					</div>
					<div>
						<input id="show_radio_android" type="checkbox" name="show_radio_android" <?php echo $check_show_radio_android; ?> />
						<label for="show_radio_android">Android</label>
					</div>
					
					<div style="padding: 1.5em 0;margin: 5px 0;">
						<input type="submit" name="Submit" value="<?php echo 'Update options'; ?>" />
					</div>
				</form>
			</div>   
		</div>
<?php
}
