<?php
/**
 * kojotrial_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kojotrial_theme
 */


/*****************************
 * ファイルの読み込み
 ****************************/
// 読み込みたいファイルを追加
function add_files() {
    wp_enqueue_style('main-style', get_stylesheet_uri('/style.css'));
}
// 追加したファイルを呼び出す
add_action('wp_enqueue_scripts', 'add_files');
