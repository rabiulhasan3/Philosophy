<?php
function philosophy_setup_theme(){
    load_theme_textdomain('philosophy');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'audio', 'video', 'standard', 'quote' ) );
    add_theme_support( 'html5', array( 'comment-form', 'search-form' ) );
    add_editor_style( 'editor-style.css' );
}
add_action("after_setup_theme","philosophy_setup_theme");