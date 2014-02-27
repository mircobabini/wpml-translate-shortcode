=== WPML Translate Shortcode ===
Contributors: mirkolofio
Donate link: http://mircobabini.com/donate/
Tags: wpml, language, translate, translation, translator, shortcode, lang, theme, plugin
Requires at least: 2.8
Tested up to: 3.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily translate text even if theme is not full WPML ready

== Description ==
Adds the wpml_translate shortcode to your shortcode suite. You can also use the wpml_text_if_language( $lang, $content ) in your php code.

= Usage (via code) =
echo wpml_text_if_language( 'en', 'Text' ); echo wpml_text_if_language( 'it', 'Testo' );

= Usage (via shortcode) =
[wpml_translate lang='en']Text[/wpml_translate][wpml_translate lang='it']Testo[/wpml_translate]

= Alias =
* wpml_language is an alias for wpml_translate shortcode
* code and language are alias for lang attribute

= Contribute =
If you wanna contribute, pull requests on [github.com](https://github.com/mirkolofio/wpml-translate-shortcode).

Developed by [Mirco Babini](http://www.mircobabini.com/), **Wordpress Consultant, Web Developer and Data Lover**.

== Installation ==

1. Upload `wpml-translate-shortcode/` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently asked questions ==

== Screenshots ==

== Changelog ==


= 1.0.0 =
* First release, it just works.
