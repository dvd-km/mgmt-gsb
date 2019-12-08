<?php

/**
 * Functions responsible for shortcodes management.
 *
 * @since        5.0.5
 * @package      Shortcodes_Ultimate
 * @subpackage   Shortcodes_Ultimate/includes
 */

/**
 * Add a shortcode.
 *
 * @since  5.0.5
 * @param array   $data    New shortcode data.
 * @param boolean $replace Replace existing shortcode or not.
 */
function su_add_shortcode( $data, $replace = true ) {
	return Shortcodes_Ultimate_Shortcodes::add( $data, $replace );
}

/**
 * Remove a shortcode.
 *
 * @since  5.0.5
 * @param string  $id Shortcode ID to remove.
 */
function su_remove_shortcode( $id ) {
	return Shortcodes_Ultimate_Shortcodes::remove( $id );
}

/**
 * Get all shortcodes.
 *
 * @since  5.0.5
 * @return array The collection of available shortcodes.
 */
function su_get_all_shortcodes() {
	return Shortcodes_Ultimate_Shortcodes::get_all();
}

/**
 * Get specific shortcode by ID.
 *
 * @since  5.0.5
 * @param string  $id The ID (without prefix) of shortcode.
 * @return array|boolean   Shortcode data if found, False otherwise.
 */
function su_get_shortcode( $id ) {
	return Shortcodes_Ultimate_Shortcodes::get( $id );
}

add_filter( 'su/data/shortcodes', 'remove_su_shortcodes' );

/**
 * Filter to modify original shortcodes data
 *
 * @param array   $shortcodes Default shortcodes
 * @return array Modified array
 */
function remove_su_shortcodes( $shortcodes ) {

	// Remove shortcode
	unset( $shortcodes['animate'] );
	unset( $shortcodes['audio'] );
	unset( $shortcodes['box'] );
	unset( $shortcodes['button'] );
	unset( $shortcodes['carousel'] );
	unset( $shortcodes['column'] );
	unset( $shortcodes['csv_table'] );
	// unset( $shortcodes['custom_gallery'] );
	unset( $shortcodes['dailymotion'] );
	unset( $shortcodes['divider'] );
	unset( $shortcodes['document'] );
	unset( $shortcodes['dropcap'] );
	unset( $shortcodes['dummy_image'] );
	unset( $shortcodes['dummy_text'] );
	unset( $shortcodes['expand'] );
	unset( $shortcodes['feed'] );
	unset( $shortcodes['frame'] );
	unset( $shortcodes['gmap'] );
	unset( $shortcodes['guests'] );
	unset( $shortcodes['heading'] );
	unset( $shortcodes['highlight'] );
	unset( $shortcodes['label'] );
	unset( $shortcodes['lightbox'] );
	unset( $shortcodes['lightbox_content'] );
	unset( $shortcodes['list'] );
	unset( $shortcodes['media'] );
	unset( $shortcodes['members'] );
	unset( $shortcodes['menu'] );
	unset( $shortcodes['meta'] );
	unset( $shortcodes['note'] );
	unset( $shortcodes['permalink'] );
	unset( $shortcodes['post'] );
	unset( $shortcodes['posts'] );
	unset( $shortcodes['private'] );
	unset( $shortcodes['pullquote'] );
	unset( $shortcodes['qrcode'] );
	unset( $shortcodes['quote'] );
	unset( $shortcodes['row'] );
	unset( $shortcodes['scheduler'] );
	unset( $shortcodes['screenr'] );
	unset( $shortcodes['service'] );
	unset( $shortcodes['siblings'] );
	unset( $shortcodes['slider'] );
	unset( $shortcodes['spacer'] );
	unset( $shortcodes['subpages'] );
	unset( $shortcodes['table'] );
	unset( $shortcodes['tab'] );
	unset( $shortcodes['tabs'] );
	unset( $shortcodes['template'] );
	unset( $shortcodes['tooltip'] );
	unset( $shortcodes['user'] );
	unset( $shortcodes['video'] );
	unset( $shortcodes['vimeo'] );
	unset( $shortcodes['youtube_advanced'] );
	unset( $shortcodes['youtube'] );

	// Return modified data
	return $shortcodes;

}