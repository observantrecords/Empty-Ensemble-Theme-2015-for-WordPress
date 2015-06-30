<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 12/22/2014
 * Time: 10:34 AM
 */

namespace ObservantRecords\WordPress\Themes\EmptyEnsemble;


class Setup {

	public function __construct() {

	}

	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'wp_enqueue_styles'), 21);
	}

	public static function wp_enqueue_styles() {
		wp_dequeue_style( 'observantrecords2015-style' );

		wp_enqueue_style( 'emptyensemble2015-font-merriweather-sans', '//fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700italic,400italic' );
		wp_enqueue_style( 'emptyensemble2015-font-cambay', '//fonts.googleapis.com/css?family=Cambay:400,700,400italic' );
		wp_enqueue_style( 'emptyensemble2015-style', get_stylesheet_uri() );
	}
}