<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt ACF Block for Video
 * Plugin URI:        https://github.com/Kntnt/kntnt-acf-block-video
 * Description:       Provides a block that embeds the video URL in the oEmbed ACF field named `kntnt-acf-block-video`.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

add_action( 'init', function () {
	register_block_type( __DIR__ . '/blocks/video' );
} );
