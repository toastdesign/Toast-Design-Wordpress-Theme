<?php
/**
 * Plugin Name: Toast Design Contact gegevens
 * Plugin URI: http://www.toastdesign.nl
 * Description: Description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Daniel Plinsinga
 * Author URI: http://www.toastdesign.nl
 * License: GPL2
 */

class Toast_Widget_Contact_Gegevens extends WP_Widget {
    /**
     * Specifies the widget name, description, class name and instatiates it
     */
    public function __construct() {
        parent::__construct(
            'widget-contact-gegevens',
            __('Contact gegevens Widget', 'toast'),
            array(
                'classname' => 'widget-contactgegevens',
                'description' => __('Een widget om de contact gegevens te kunnen weergeven', 'toast')
            )
        );
    }

    /**
     * Generates the back-end layout for the widget
     */
    public function form( $instance ) {
        // Default widget settings
        $defaults = array(
            'title'     => 'Contactgegevens',
            'naam'      => 'Naam contact persoon',
            'straat'    => 'Oranjestraat',
            'nummer'    => '5',
            'postcode'  => '3039TA',
            'plaats'    => 'Rotterdam',
            'telefoon'  => '+31(0)10 123 4567'
        );

        $instance = wp_parse_args( (array) $instance, $defaults );

        // The widget content ?>
    }
}

// Register the widget using a annonymous function
add_action( 'widgets_init', create_function( '', 'register_widget("Toast_Widget_Contact_Gegevens");' ) );

?>