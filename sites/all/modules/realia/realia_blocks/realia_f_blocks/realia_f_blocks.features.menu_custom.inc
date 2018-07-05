<?php
/**
 * @file
 * realia_f_blocks.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function realia_f_blocks_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: features.
  $menus['features'] = array(
    'menu_name' => 'features',
    'title' => 'Features',
    'description' => 'Menu items for any enabled features.',
  );
  // Exported menu: menu-share.
  $menus['menu-share'] = array(
    'menu_name' => 'menu-share',
    'title' => 'Share',
    'description' => '',
  );
  // Exported menu: menu-usefull-links.
  $menus['menu-usefull-links'] = array(
    'menu_name' => 'menu-usefull-links',
    'title' => 'Useful links',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Features');
  t('Menu items for any enabled features.');
  t('Share');
  t('Useful links');


  return $menus;
}
