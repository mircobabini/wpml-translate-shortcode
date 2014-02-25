<?php
/*
Plugin Name: WPML Translate Shortcode
Plugin URI: http://github.com/mirkolofio/wpml-translate-shortcode
Description: Easily translate text even if theme is not <strong>full WPML ready</strong>.
Author: Mirco Babini
Version: 1.0.0
Author URI: http://github.com/mirkolofio
*/

/**
 * Usage (via shortcode)
 * [wpml_translate lang='en']Text[/wpml_translate][wpml_translate lang='it']Testo[/wpml_translate]
 * wpml_language is an alias for wpml_translate shortcode
 * code and language are alias for lang attribute
 *
 * Usage (via code)
 * echo wpml_text_if_language( 'en', 'Text' );
 * echo wpml_text_if_language( 'en', 'Testo' );
 *
 */
// init shortcode and handler
if ( !function_exists( 'load_wpml_translate_shortcode' ) ){
	function load_wpml_translate_shortcode(){

		add_shortcode( 'wpml_translate', 'wpml_text_if_language_sc');
		add_shortcode( 'wpml_language', 'wpml_text_if_language_sc');
	}
	add_action( 'init', 'load_wpml_translate_shortcode' );

	function wpml_text_if_language_sc( $attr, $content = null ){
		if ( ! defined( 'ICL_LANGUAGE_CODE' ) ){
			return '';
		}

		// choose the attr that you prefer
		extract(shortcode_atts(array(
			'lang' => '',
			'code' => '', // same of lang
			'language' => '', // same of lang
		), $attr));

		$lang = ( $code ) ? $code : $lang;
		$lang = ( $language ) ? $language : $lang;
		$lang = ( $lang ) ? $lang : ICL_LANGUAGE_CODE;

		return wpml_text_if_language( $lang, $content );
	}
}

// provide helper even for code
if ( !function_exists( 'wpml_text_if_language' ) ){
	function wpml_text_if_language( $lang, $content ){

		if ( ! defined( 'ICL_LANGUAGE_CODE' ) ){
			return '';
		}

		if ( $lang === null ){
			return '';
		}

		if ( ICL_LANGUAGE_CODE === $lang ){
			return do_shortcode( $content );
		} else{
			return '';
		}
	}
}

