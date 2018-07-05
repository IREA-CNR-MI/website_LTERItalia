<?php

require_once 'pikachoose_slider_plugin_slider.inc';

/**
 * Implements hook_views_plugins().
 */
function pikachoose_slider_views_plugins() {
  return array(
    'module' => 'pikachoose_slider',
    'style' => array(
        'pikachoose_slider' => array(
        'title' => t('Pikachoose slider'),
        'help' => t('No help for you!'),
        'handler' => 'pikachoose_slider_plugin_slider',
        'uses options' => TRUE,
        'uses row plugin' => TRUE,
        'uses grouping' => FALSE,
        'uses row class' => TRUE,
        'type' => 'normal',
        'parent' => 'list',
        'path' => drupal_get_path('module', 'pikachoose_slider'),
        'theme' => 'pikachoose_slider',
        'theme path' => drupal_get_path('module', 'pikachoose_slider'),
      ),
    ),
  );
}

