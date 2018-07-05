<?php

require_once 'realia_utils_plugin_style_grid.inc';
require_once 'realia_utils_plugin_style_gmap.inc';
/**
 * Implements hook_views_plugins().
 */
function realia_utils_views_plugins() {
  return array(
    'module' => 'realia_utils',
    'style' => array(
      'realia_grid' => array(
        'title' => t('Realia Grid'),
        'help' => t('Display the results as a realia grid.'),
        'handler' => 'realia_utils_plugin_style_grid',
        'uses options' => TRUE,
        'uses row plugin' => TRUE,
        'uses grouping' => FALSE,
        'uses row class' => TRUE,
        'type' => 'normal',
        'parent' => 'list',
        'path' => drupal_get_path('module', 'realia_utils'),
        'theme' => 'realia_view_grid',
        'theme path' => drupal_get_path('module', 'realia_utils'),
      ),
      'realia_gmap' => array(
        'title' => t('Realia Gmap'),
        'help' => t('Display the results as a gmap.'),
        'handler' => 'realia_utils_plugin_style_gmap',
        'uses options' => TRUE,
        'uses row plugin' => TRUE,
        'uses grouping' => FALSE,
        'uses row class' => TRUE,
        'type' => 'normal',
        'parent' => 'list',
        'path' => drupal_get_path('module', 'realia_utils'),
        'theme' => 'realia_view_gmap',
        'theme path' => drupal_get_path('module', 'realia_utils'),
      ),
    ),
  );
}

