<?php

/**
 * @file
 * Contains the grid style plugin.
 */

/**
 * Style plugin to render each item in a grid cell.
 *
 * @ingroup views_style_plugins
 */
class realia_utils_plugin_style_gmap extends views_plugin_style {

  /**
   * Set default options
   */
  function option_definition() {
    $options = parent::option_definition();

    $options['latitude'] = array('default' => 0);
    $options['longitude'] = array('default' => 0);
    $options['latitude-field'] = array('default' => NULL);
    $options['longitude-field'] = array('default' => NULL);
    $options['zoom'] = array('default' => 8);
    $options['width'] = array('default' => '400px');
    $options['height'] = array('default' => '400px');
    $options['default-position'] = array('default' => 'default');
    return $options;
  }

  /**
   * Render the given style.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $field_names = $this->display->handler->get_field_labels();

    $form['zoom'] = array(
      '#title' => t('Zoom'),
      '#type' => 'select',
      '#options' => array(
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11,
        12 => 12,
        13 => 13,
        14 => 14,
        15 => 15,
      ),
      '#default_value' => $this->options['zoom']
    );

    $form['width'] = array(
      '#type' => 'textfield',
      '#title' => t('Width'),
      '#default_value' => $this->options['width']
    );

    $form['height'] = array(
      '#type' => 'textfield',
      '#title' => t('Height'),
      '#default_value' => $this->options['height']
    );

    $form['latitude'] = array(
      '#type' => 'textfield',
      '#title' => t('Latitude'),
      '#default_value' => $this->options['latitude']
    );

    $form['longitude'] = array(
      '#type' => 'textfield',
      '#title' => t('Longitude'),
      '#default_value' => $this->options['longitude']
    );

    $form['latitude-field'] = array(
      '#type' => 'select',
      '#title' => t('Latitude field'),
      '#options' => $field_names,
      '#default_value' => $this->options['latitude-field']
    );

    $form['longitude-field'] = array(
      '#type' => 'select',
      '#title' => t('Longitude field'),
      '#options' => $field_names,
      '#default_value' => $this->options['longitude-field']
    );

    $form['image-field'] = array(
      '#type' => 'select',
      '#title' => t('Icon field'),
      '#options' => $field_names,
      '#default_value' => $this->options['image-field']
    );

    $form['default-position'] = array(
      '#type' => 'select',
      '#title' => t('Default map position'),
      '#options' => array(
        'default' => t('Center on given coordinates'),
        'center' => t('Markers center'),
        'center zoom' => t('Center of all markers - zoomed out'),
      ),
    );
  }
}
