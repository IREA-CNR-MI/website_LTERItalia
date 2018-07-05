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
class realia_utils_plugin_style_grid extends views_plugin_style {
  /**
   * Set default options
   */
  function option_definition() {
    $options = parent::option_definition();

    $options['view-columns'] = array('default' => '9');
    $options['record-columns'] = array('default' => '3');
    $options['row-records'] = array('default' => '3');

    return $options;
  }

  /**
   * Render the given style.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $options = array(
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
    );

    $form['fluid'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use fluid grid'),
      '#default_value' => $this->options['fluid']
    );

    $form['view-columns'] = array(
      '#type' => 'select',
      '#options' => $options,
      '#title' => t('Spans for view'),
      '#default_value' => $this->options['view-columns'],
      '#required' => TRUE,
      '#element_validate' => array('views_element_validate_integer'),
    );

    $form['record-columns'] = array(
      '#type' => 'select',
      '#title' => t('Spans per record'),
      '#options' => $options,
      '#required' => TRUE,
      '#element_validate' => array('views_element_validate_integer'),
      '#default_value' => $this->options['record-columns'],
    );

    $form['row-records'] = array(
      '#type' => 'select',
      '#title' => t('Max number of records in row'),
      '#options' => $options,
      '#required' => TRUE,
      '#element_validate' => array('views_element_validate_integer'),
      '#default_value' => $this->options['row-records'],
    );

  }
}
