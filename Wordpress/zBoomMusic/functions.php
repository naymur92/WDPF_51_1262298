<?php
  add_theme_support( 'post-thumbnails');
  
  function zboom_register_nav_menu() {
    register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'zboommusic' ),
      'footer_menu'  => __( 'Footer Menu', 'text_domain' )
    ) );
  }
  add_action( 'after_setup_theme', 'zboom_register_nav_menu' );


  function zboom_widgets_init() {
    register_sidebar( array(
      'name'          => __( 'Right Sidebar', 'zboommusic' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'The main sidebar appears on the right on each page except the front page template.', 'zboommusic' ),
      'before_widget' => '<div class="col-1-3"><div class="wrap-col">',
      'after_widget'  => '</div></div></div></div>',
      'before_title'  => '<div class="box"><div class="heading"><h2>',
      'after_title'   => '</h2></div><div class="content">',
    ) );
    register_sidebar( array(
      'name'          => __( 'Footer Sidebar', 'zboommusic' ),
      'id'            => 'sidebar-2',
      'description'   => __( 'Appears on the static page template', 'zboommusic' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    ) );
  }
  add_action( 'widgets_init', 'zboom_widgets_init' );

  // Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );