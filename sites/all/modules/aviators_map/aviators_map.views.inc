<?php

require_once 'aviators_map_plugin_style_gmap.inc';

/**
 * Implements hook_views_plugins().
 */
function aviators_map_views_plugins() {
  return array(
    'module' => 'aviators_map',
    'style' => array(
      'aviators_map' => array(
        'title' => t('Aviators Gmap'),
        'help' => t('Display the results as a gmap.'),
        'handler' => 'aviators_map_plugin_style_gmap',
        'uses options' => TRUE,
        'uses row plugin' => TRUE,
        'uses grouping' => FALSE,
        'uses row class' => TRUE,
        'type' => 'normal',
        'parent' => 'list',
        'path' => drupal_get_path('module', 'aviators_map'),
        'theme' => 'aviators_map_view',
        'theme path' => drupal_get_path('module', 'aviators_map'),
      ),
    ),
  );
}

