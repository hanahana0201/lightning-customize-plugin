<?php
/*
Plugin Name: Lightning Customize Plugin
Version: 1.0
*/

// CSSの読み込み設定
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
function my_enqueue_styles()
{
    wp_enqueue_style(
        'my-front-css',
        plugins_url('assets/dist/css/style.css', __FILE__),
        array('lightning-design-style'),
        filemtime(plugin_dir_path(__FILE__) . 'assets/dist/css/style.css')
    );
}

// エディター用CSS追加
add_action('enqueue_block_editor_assets', 'my_editor_styles');
function my_editor_styles()
{
    wp_enqueue_style(
        'my-editor-css',
        plugins_url('assets/dist/css/editor.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'assets/dist/css/editor.css')
    );
}

// フロントエンド用JS追加
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
function my_enqueue_scripts()
{
    wp_enqueue_script(
        'my-front-js',
        plugins_url('assets/dist/js/script.min.js', __FILE__),
        array('jquery'), // 必要に応じて依存関係を指定（例: jQuery）
        filemtime(plugin_dir_path(__FILE__) . 'assets/dist/js/script.min.js'),
        true // フッターで読み込む
    );
}

// エディター用JS追加
add_action('enqueue_block_editor_assets', 'my_editor_scripts');
function my_editor_scripts()
{
    wp_enqueue_script(
        'my-editor-js',
        plugins_url('assets/dist/js/editor.min.js', __FILE__),
        array('wp-blocks', 'wp-element'), // 必要に応じて依存関係を指定
        filemtime(plugin_dir_path(__FILE__) . 'assets/dist/js/editor.min.js'),
        true
    );
}
