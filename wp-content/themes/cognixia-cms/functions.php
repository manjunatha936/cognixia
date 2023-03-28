<?php 
   
    add_theme_support('post-thumbnails');
	
add_theme_support( 'post-thumbnails',array('page')); 


// menu
function Cognixia_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }
add_action( 'after_setup_theme', 'Cognixia_theme_setup' );

// theme option
add_filter( 'ot_show_pages','__return_false' );
add_filter( 'ot_show_new_layout','__return_false' );
add_filter( 'ot_theme_mode','__return_true' );
include_once( 'inc/Theme-control/ot-loader.php' );
include_once( 'inc/Theme-control/assets/theme-mode/theme-options.php' );
function pietergoosen_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }
 function wpb_custom_new_menu(){
  register_nav_menus(
      array(
          'Header-menu'=>__('Header-menu'),
          'Footer-menu'=>__('Footer_menu')
      )
      );
}
add_action( 'init','wpb_custom_new_menu' );



function buildTree(array &$elements, $parentId = 0)
{
  $branch = array();
  $i = 0;
  foreach ($elements as &$element) {
    if ($element->menu_item_parent == $parentId) {
      $children = buildTree($elements, $element->ID);
      if ($children)
        $element->wpse_children = $children;

      $branch[$i++] = $element;
      unset($element);
    }
  }
  return $branch;
}

function wpse_nav_menu_3_tree($menu_id)
{
  $items = wp_get_nav_menu_items($menu_id);
  return  $items ? buildTree($items, 0) : null;
}


function buildTree1(array &$elements, $parentId = 0)
{
  $branch = array();
  $i = 0;
  foreach ($elements as &$element) {
    if ($element->menu_item_parent == $parentId) {
      $children = buildTree($elements, $element->ID);
      if ($children)
        $element->wpse_children = $children;

      $branch[$i++] = $element;
      unset($element);
    }
  }
  return $branch;
}

function wpse_nav_menu_2_tree($menu_id)
{
  $items = wp_get_nav_menu_items($menu_id);
  return  $items ? buildTree($items, 0) : null;
}


function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

?>  