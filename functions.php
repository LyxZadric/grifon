<?php

function add_ressources(){
  //ajoute feuille de style au head
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', add_ressources);

//naviagtion menus
register_nav_menus(array(
  'header' => __('Header Menu'),
  'secondary' => __('Secondary Menu'),
  'footer' => __('Footer Menu')
));
