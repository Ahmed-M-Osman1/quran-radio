<?php
class Quran_Radio_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Quran_Radio_Widget', // Base ID
			__('Quran Radio', 'the-quran-radio'), // Name
			array( 'description' => __( 'You can play 1 out of 40 translations of the Quran', 'the-quran-radio' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $Radio_Languages;

		$title = apply_filters( 'widget_title', $instance['title'] );
		$edc_radio_id = $instance['edc_radio_id'];
		$edc_radio_autostart = $instance['edc_radio_autostart'];
		$edc_player_type = $instance['edc_player_type'];
		$edc_show_title = $instance['edc_show_title'];
		
		$edc_icon_source = $instance['edc_icon_source'];
		$edc_icon_book = $instance['edc_icon_book'];
		$edc_icon_podcast = $instance['edc_icon_podcast'];
		$edc_icon_download = $instance['edc_icon_download'];
		
		$edc_icon_asx = $instance['edc_icon_asx'];
		$edc_icon_qtl = $instance['edc_icon_qtl'];
		$edc_icon_ram = $instance['edc_icon_ram'];
		$edc_icon_pls = $instance['edc_icon_pls'];
		$edc_icon_tunein = $instance['edc_icon_tunein'];

		$widget_data = array(
			'title' => $title,
			'radio_key' => $edc_radio_id,
			'autostart' => $edc_radio_autostart,
			'url' => $edc_icon_source,
			'pdf' => $edc_icon_book,
			'podcast' => $edc_icon_podcast,
			'txt' => $edc_icon_download,
			'asx' => $edc_icon_asx,
			'qtl' => $edc_icon_qtl,
			'ram' => $edc_icon_ram,
			'pls' => $edc_icon_pls,
			'tunein' => $edc_icon_tunein,
			'type' => $edc_player_type,
			'show_title' => $edc_show_title
		);

		$code = '<div id="quran-radio-widget">';
		$code .= get_radio($edc_radio_id, 0, $widget_data);
		$code .= '</div>';

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		echo __( $code, 'the-quran-radio' );
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$Radio_Languages = radios_list();
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
			$edc_radio_id = $instance['edc_radio_id'];
			$edc_radio_autostart = $instance['edc_radio_autostart'];
			$edc_icon_source = $instance['edc_icon_source'];
			$edc_icon_book = $instance['edc_icon_book'];
			$edc_icon_podcast = $instance['edc_icon_podcast'];
			$edc_icon_download = $instance['edc_icon_download'];
			$edc_icon_asx = ( isset($instance['edc_icon_asx']) ? $instance['edc_icon_asx'] : 0 );
			$edc_icon_qtl = ( isset($instance['edc_icon_qtl']) ? $instance['edc_icon_qtl'] : 0 );
			$edc_icon_ram = ( isset($instance['edc_icon_ram']) ? $instance['edc_icon_ram'] : 0 );
			$edc_icon_pls = ( isset($instance['edc_icon_pls']) ? $instance['edc_icon_pls'] : 0 );
			$edc_icon_tunein = ( isset($instance['edc_icon_tunein']) ? $instance['edc_icon_tunein'] : 0 );
			$edc_show_title = $instance['edc_show_title'];
			$edc_player_type = $instance['edc_player_type'];
		}else{
			$title = __( 'Quran Radio', 'the-quran-radio' );
			$edc_radio_id = 1;
			$edc_radio_autostart = 0;
			$edc_icon_source = 1;
			$edc_icon_book = 1;
			$edc_icon_podcast = 1;
			$edc_icon_download = 1;
			$edc_icon_asx = 1;
			$edc_icon_qtl = 1;
			$edc_icon_ram = 1;
			$edc_icon_pls = 1;
			$edc_icon_tunein = 1;
			$edc_show_title = 1;
			$edc_player_type = 'html5';
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<p>
		<select id="<?php echo $this->get_field_id('edc_radio_id'); ?>" name="<?php echo $this->get_field_name('edc_radio_id'); ?>">
		<?php foreach($Radio_Languages as $k => $v){ ?>
		<option value="<?php echo $k; ?>" <?php echo ( $edc_radio_id == $k ) ? 'selected="selected"' : ''; ?>><?php echo $k.'- '.$v['title']; ?></option>
		<?php } ?>
		</select>
		<label for="<?php echo $this->get_field_id('edc_radio_id'); ?>"> 
		<?php _e('Languages', 'the-quran-radio'); ?>
		</label>
		</p>
		 
		<p>
		<select id="<?php echo $this->get_field_id('edc_player_type'); ?>" name="<?php echo $this->get_field_name('edc_player_type'); ?>">
		<option value="html5" <?php echo ( $edc_player_type == 'html5' ) ? 'selected="selected"' : ''; ?>>HTML5</option>
		<option value="jplayer" <?php echo ( $edc_player_type == 'jplayer' ) ? 'selected="selected"' : ''; ?>>JPlayer</option>
		</select>
		<label for="<?php echo $this->get_field_id('edc_player_type'); ?>"> 
		<?php _e('Player', 'the-quran-radio'); ?>
		</label>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('edc_radio_autostart'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_radio_autostart'); ?>" name="<?php echo $this->get_field_name('edc_radio_autostart'); ?>" type="checkbox" <?php if($edc_radio_autostart) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Auto Start', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_source'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_source'); ?>" name="<?php echo $this->get_field_name('edc_icon_source'); ?>" type="checkbox" <?php if($edc_icon_source) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Source Icon', 'the-quran-radio'); ?>
		</label>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_book'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_book'); ?>" name="<?php echo $this->get_field_name('edc_icon_book'); ?>" type="checkbox" <?php if($edc_icon_book) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Book Icon', 'the-quran-radio'); ?>
		</label>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_podcast'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_podcast'); ?>" name="<?php echo $this->get_field_name('edc_icon_podcast'); ?>" type="checkbox" <?php if($edc_icon_podcast) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Podcast Icon', 'the-quran-radio'); ?>
		</label>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_download'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_download'); ?>" name="<?php echo $this->get_field_name('edc_icon_download'); ?>" type="checkbox" <?php if($edc_icon_download) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Download Icon', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_asx'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_asx'); ?>" name="<?php echo $this->get_field_name('edc_icon_asx'); ?>" type="checkbox" <?php if($edc_icon_asx) { echo 'checked="checked"'; } ?> /> 
		<?php _e('MediaPlayer Icon', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_qtl'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_qtl'); ?>" name="<?php echo $this->get_field_name('edc_icon_qtl'); ?>" type="checkbox" <?php if($edc_icon_qtl) { echo 'checked="checked"'; } ?> /> 
		<?php _e('QuickTime Icon', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_ram'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_ram'); ?>" name="<?php echo $this->get_field_name('edc_icon_ram'); ?>" type="checkbox" <?php if($edc_icon_ram) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Realplayer Icon', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_pls'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_pls'); ?>" name="<?php echo $this->get_field_name('edc_icon_pls'); ?>" type="checkbox" <?php if($edc_icon_pls) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Winamp Icon', 'the-quran-radio'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('edc_icon_tunein'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_icon_tunein'); ?>" name="<?php echo $this->get_field_name('edc_icon_tunein'); ?>" type="checkbox" <?php if($edc_icon_tunein) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Tunein Icon', 'the-quran-radio'); ?>
		</label>
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('edc_show_title'); ?>"> 
		<input id="<?php echo $this->get_field_id('edc_show_title'); ?>" name="<?php echo $this->get_field_name('edc_show_title'); ?>" type="checkbox" <?php if($edc_show_title) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Show title', 'the-quran-radio'); ?>
		</label>
		</p>
		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['edc_radio_id'] = $new_instance['edc_radio_id'];
		$instance['edc_radio_autostart'] = ( isset( $new_instance['edc_radio_autostart'] ) ? 1 : 0 );
		$instance['edc_icon_source'] = ( isset( $new_instance['edc_icon_source'] ) ? 1 : 0 );
		$instance['edc_icon_book'] = ( isset( $new_instance['edc_icon_book'] ) ? 1 : 0 );
		$instance['edc_icon_podcast'] = ( isset( $new_instance['edc_icon_podcast'] ) ? 1 : 0 );
		$instance['edc_icon_download'] = ( isset( $new_instance['edc_icon_download'] ) ? 1 : 0 );
		$instance['edc_icon_asx'] = ( isset( $new_instance['edc_icon_asx'] ) ? 1 : 0 );
		$instance['edc_icon_qtl'] = ( isset( $new_instance['edc_icon_qtl'] ) ? 1 : 0 );
		$instance['edc_icon_ram'] = ( isset( $new_instance['edc_icon_ram'] ) ? 1 : 0 );
		$instance['edc_icon_pls'] = ( isset( $new_instance['edc_icon_pls'] ) ? 1 : 0 );
		$instance['edc_icon_tunein'] = ( isset( $new_instance['edc_icon_tunein'] ) ? 1 : 0 );
		$instance['edc_show_title'] = ( isset( $new_instance['edc_show_title'] ) ? 1 : 0 );
		$instance['edc_player_type'] = $new_instance['edc_player_type'];
		return $instance;
	}

}

function register_Quran_Radio_Widget() {
    register_widget( 'Quran_Radio_Widget' );
}
add_action( 'widgets_init', 'register_Quran_Radio_Widget' );
?>