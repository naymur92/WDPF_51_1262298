<?php

/**
 * Plugin Name: News Ticker
 * Plugin URI: http://bdprogrammers.com
 * Description: News Ticker plugin
 * Version: 1.0.0
 * Author: Naymur Rahman
 * Author URI: http://naymur.bdprogrammers.com
 * License: GPL2
 */


// Enable News Post
function news_post()
{
  $args = array(
    'public'    => true,
    'label'     => __('Breaking News', 'newsticker'),
    'menu_icon' => 'dashicons-format-aside',
    'supports'  => array('title'),
  );
  register_post_type('news', $args);
}
add_action('init', 'news_post');


function NewsTicker_scripts()
{
  wp_enqueue_style('nt_style', plugins_url('/css/eocjs-newsticker.css', __FILE__));
  wp_enqueue_script('news_ticker_js', plugins_url('js/eocjs-newsticker.js', __FILE__), array(), '0.7.0', true);
  wp_enqueue_script('custom_js', plugins_url('js/custom_js.js', __FILE__), array(), '1.0', true);

  $content = '<div class="ticker">';
  $sql = new WP_Query(array(
    'post_type' =>  'news',
    'posts_per_page'  =>  5
  ));
  if ($sql->have_posts()) :
    while ($sql->have_posts()) : $sql->the_post();
    $content .= get_the_title().' *** ';
    endwhile;
  endif;
  wp_reset_postdata();
  $content .= '</div>';

  echo $content;
}
// add_action( 'wp_enqueue_scripts', 'NewsTicker_scripts' );
add_shortcode('mynews', 'NewsTicker_scripts');
