<?php
/**
 *  Social Links Widget
 *
 * The Social Links widget created by Eric Chan, Cliff Chan, and Rodrigo Samayoa.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Social_Links_Widget
 * @author    Eric Chan, Cliff Chan, and Rodrigo Samayoa
 * @license   GPL-2.0+
 * @link      https://github.com/redacademy/b2w-winter-2018
 * @copyright 2018 Red Academy
 *
 * @wordpress-plugin
 * Plugin Name:       Social Links Widget
 * Plugin URI:        https://github.com/redacademy/b2w-winter-2018
 * Description:       Social Links Plugin, Social Links
 * Version:           1.0.0
 * Author:            Eric Chan, Cliff Chan, and Rodrigo Samayoa
 * Author URI:        https://github.com/redacademy/b2w-winter-2018
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Social_Links_Widget extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'social-links-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Social Links Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Contains Social Links Information'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		// d($args, $instance); // kint debugger

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );

		$facebook = empty( $instance['facebook'] ) ? '' : apply_filters( 'facebook', $instance['facebook'] );

		$twitter = empty( $instance['twitter'] ) ? '' : apply_filters( 'twitter', $instance['twitter'] );

		$instagram = empty( $instance['instagram'] ) ? '' : apply_filters( 'instagram', $instance['instagram'] );

		

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['facebook'] = strip_tags( $new_instance['facebook'] );

		$instance['twitter'] = strip_tags( $new_instance['twitter'] );

		$instance['instagram'] = strip_tags( $new_instance['instagram'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Social Links Widget',
				'facebook' => '',
				'twitter' => '',
				'instagram' => ''
			)
		);

		$title = strip_tags( $instance['title'] );

		$facebook = strip_tags( $instance['facebook'] );
	
		$twitter = strip_tags( $instance['twitter'] );
	
		$instagram = strip_tags( $instance['instagram'] );
	
		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Social_Links_Widget' );
});