<?php



class WP_Widget_Pages_at_Depth_at_Depth extends WP_Widget {
	
	
	
	function WP_Widget_Pages_at_Depth_at_Depth() {
		
		$widget_ops = array('classname' => 'widget_pages', 'description' => __( 'Your blog&#8217;s WordPress Pages configured by depth') );
		$this->WP_Widget('pages_at_depth', __('Pages at Depth'), $widget_ops);
		
	}
	
	
	
	function widget( $args, $instance ) {
		
		extract( $args );

		$title = apply_filters('widget_title', $instance['title']);
		$sortby = empty( $instance['sortby'] ) ? 'menu_order' : $instance['sortby'];
		$startdepth = $instance['startdepth'] > 0 ? $instance['startdepth'] : 0;
		$depth = $instance['depth'] > 0 ? $instance['depth'] : 0;
		$exclude = empty( $instance['exclude'] ) ? '' : $instance['exclude'];

		if ( $sortby == 'menu_order' ) {
			$sortby = 'menu_order, post_title';
		}
		
		$out = list_pages_at_depth( apply_filters('widget_pages_args', array('startdepth' => $startdepth, 'depth' => $depth, 'title_li' => '', 'echo' => 0, 'sort_column' => $sortby, 'exclude' => $exclude) ) );
		
		if ( !empty($out) ) {
			echo $before_widget;
			if ( $title ) {
				echo $before_title . $title . $after_title;
			}
			echo '<ul>' . $out . '</ul>';
			echo $after_widget;
		}
		
	}
	
	
	
	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		
		if ( in_array( $new_instance['sortby'], array( 'post_title', 'menu_order', 'ID' ) ) ) {
			$instance['sortby'] = $new_instance['sortby'];
		} else {
			$instance['sortby'] = 'menu_order';
		}

		$instance['exclude'] = strip_tags( $new_instance['exclude'] );
		
		$instance['startdepth'] = $new_instance['startdepth'] > 0 ? $new_instance['startdepth'] : 0;
		$instance['depth'] = $new_instance['depth'] > 0 ? $new_instance['depth'] : 0;

		return $instance;
		
	}
	
	
	
	function form( $instance ) {
		
		$instance = wp_parse_args( (array) $instance, array(
			'sortby' => 'post_title',
			'title' => '',
			'exclude' => '',
			'startdepth' => 0,
			'depth' => 0
		) );
		$title = esc_attr( $instance['title'] );
		$exclude = esc_attr( $instance['exclude'] );
		
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		<p>
			<label for="<?php echo $this->get_field_id('sortby'); ?>"><?php _e( 'Sort by:' ); ?></label>
			<select name="<?php echo $this->get_field_name('sortby'); ?>" id="<?php echo $this->get_field_id('sortby'); ?>" class="widefat">
				<option value="post_title"<?php selected( $instance['sortby'], 'post_title' ); ?>><?php _e('Page title'); ?></option>
				<option value="menu_order"<?php selected( $instance['sortby'], 'menu_order' ); ?>><?php _e('Page order'); ?></option>
				<option value="ID"<?php selected( $instance['sortby'], 'ID' ); ?>><?php _e( 'Page ID' ); ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('startdepth'); ?>"><?php _e( 'Start depth:' ); ?></label>
			<select name="<?php echo $this->get_field_name('startdepth'); ?>" id="<?php echo $this->get_field_id('startdepth'); ?>" class="widefat">
				<option value="0"<?php selected( $instance['startdepth'], '0' ); ?>>0</option>
				<option value="1"<?php selected( $instance['startdepth'], '1' ); ?>>1</option>
				<option value="2"<?php selected( $instance['startdepth'], '2' ); ?>>2</option>
				<option value="3"<?php selected( $instance['startdepth'], '3' ); ?>>3</option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('depth'); ?>"><?php _e( 'Depth:' ); ?></label>
			<select name="<?php echo $this->get_field_name('depth'); ?>" id="<?php echo $this->get_field_id('depth'); ?>" class="widefat">
				<option value="0"<?php selected( $instance['depth'], '0' ); ?>>0</option>
				<option value="1"<?php selected( $instance['depth'], '1' ); ?>>1</option>
				<option value="2"<?php selected( $instance['depth'], '2' ); ?>>2</option>
				<option value="3"<?php selected( $instance['depth'], '3' ); ?>>3</option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('exclude'); ?>"><?php _e( 'Exclude:' ); ?></label> <input type="text" value="<?php echo $exclude; ?>" name="<?php echo $this->get_field_name('exclude'); ?>" id="<?php echo $this->get_field_id('exclude'); ?>" class="widefat" /><br />
			<small><?php _e( 'Page IDs, separated by commas.' ); ?></small>
		</p>
		<?php
	}
	
	
	
}



function list_page_at_depth_widgets_init() {

	register_widget('WP_Widget_Pages_at_Depth_at_Depth');

}

add_action('widgets_init', 'list_page_at_depth_widgets_init', 1);



?>