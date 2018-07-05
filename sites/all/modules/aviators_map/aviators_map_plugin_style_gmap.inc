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
class aviators_map_plugin_style_gmap extends views_plugin_style {

  /**
   * Set default options
   */
  function option_definition() {
    $options = parent::option_definition();

    $options['class'] = array('default' => NULL);
    $options['class_field'] = array('default' => NULL);

    $options['map_field'] = array('default' => NULL);
    $options['enable_cluster'] = array('default' => TRUE);
    $options['clustering_size'] = array('default' => 60);

    $options['zoom'] = array('default' => 12);
    $options['width'] = array('default' => '400px');
    $options['height'] = array('default' => '400px');

    $options['default_position'] = array('default' => 'default');
    $options['map_longitude'] = array('map_longitude' => '');
    $options['map_latitude'] = array('map_latitude' => '');

    $options['overview_map_control'] = array('default' => TRUE);
    $options['pan_control_position'] = array('default' => 1);
    $options['scale_control_position'] = array('default' => 1);
    $options['rotate_control_position'] = array('default' => 1);
    $options['zoom_control_position'] = array('default' => 1);
    $options['streetview_control_position'] = array('default' => 1);

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
        16 => 16,
        17 => 17,
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

    $form['map_field'] = array(
      '#type' => 'select',
      '#title' => t('Google map field'),
      '#options' => $field_names,
      '#default_value' => $this->options['map_field']
    );

    $form['class'] = array(
      '#type' => 'textfield',
      '#title' => t('Additional marker class'),
      '#default_value' => $this->options['class'],
    );

    $form['class_field'] = array(
      '#type' => 'select',
      '#title' => t('Marker class from field'),
      '#description' => t('This field is very usefull when styling various icons for various marker types'),
      '#options' => $field_names,
      '#default_value' => $this->options['class_field']
    );

    $form['default_position'] = array(
      '#type' => 'select',
      '#title' => t('Default map position'),
      '#options' => array(
        'default' => t('Center on given coordinates'),
        'center' => t('Markers center'),
        'center zoom' => t('Center of all markers - zoomed out'),
      ),
      '#default_value' => $this->options['default_position'],
    );

    $form['map_latitude'] = array(
      '#type' => 'textfield',
      '#title' => t('Map center - latitude'),
      '#default_value' => $this->options['map_latitude'],
    );

    $form['map_longitude'] = array(
      '#type' => 'textfield',
      '#title' => t('Map center - longitude'),
      '#default_value' => $this->options['map_longitude'],
    );

    $form['enable_cluster'] = array(
      '#type' => 'checkbox',
      '#title' => t('Enable clustering'),
      '#default_value' => $this->options['enable_cluster'],
    );

    $form['clustering_size'] = array(
      '#type' => 'textfield',
      '#descriptiom' => t('Clustering grid size - area of cluster influence'),
      '#title' => t('Cluster grid size'),
      '#default_value' => $this->options['clustering_size'],
    );

    $form['overview_map_control'] = array(
      '#type' => 'checkbox',
      '#title' => t('Enable map controls'),
      '#default_value' => $this->options['overview_map_control'],
    );

    $controls_position_options = array(
      0 => t('Don\'t display'),
      1 => t('TL - Top left'),
      2 => t('TC - Top center'),
      3 => t('TR - Top right'),
      4 => t('LT - Left top'),
      5 => t('RT - Right top'),
      6 => t('LC - Left center'),
      7 => t('RC - Right center'),
      8 => t('LB - Left bottom'),
      9 => t('RB - Right bottom'),
      10 => t('BL - Bottom left'),
      11 => t('BC - Bottom center'),
      12 => t('BR - Bottom right'),
    );

    $form['pan_control_position'] = array(
      '#type' => 'select',
      '#title' => t('Pan controls position'),
      '#options' => $controls_position_options,
      '#default_value' => $this->options['pan_control_position']
    );


    $form['scale_control_position'] = array(
      '#type' => 'select',
      '#title' => t('Scale controls position'),
      '#options' => $controls_position_options,
      '#default_value' => $this->options['scale_control_position']
    );


    $form['rotate_control_position'] = array(
      '#type' => 'select',
      '#title' => t('Rotate controls position'),
      '#options' => $controls_position_options,
      '#default_value' => $this->options['rotate_control_position']
    );

    $form['zoom_control_position'] = array(
      '#type' => 'select',
      '#title' => t('Zoom controls position'),
      '#options' => $controls_position_options,
      '#default_value' => $this->options['zoom_control_position']
    );

    $form['streetview_control_position'] = array(
      '#type' => 'select',
      '#title' => t('StreetView controls position'),
      '#options' => $controls_position_options,
      '#default_value' => $this->options['streetview_control_position']
    );

    $form['control_position_desc']['#markup'] = "
    <pre>
    +________________+
    + TL    TC    TR +
    + LT          RT +
    +                +
    + LC          RC +
    +                +
    + LB          RB +
    + BL    BC    BR +
    +________________+
    </pre>
    ";
  }
}
