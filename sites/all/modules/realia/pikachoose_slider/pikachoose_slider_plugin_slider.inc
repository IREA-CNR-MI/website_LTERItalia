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
class pikachoose_slider_plugin_slider extends views_plugin_style {
  /**
   * Set default options
   */
  function option_definition() {
    $options = parent::option_definition();

    $options['hoverPause'] = array('default' => FALSE);
    $options['autoPlay'] = array('default' => FALSE);
    $options['carousel'] = array('default' => TRUE);
    $options['speed'] = array('default' => 5000);
    $options['animationSpeed'] = array('default' => 600);
    $options['thumbOpacity'] = array('default' => 1);
    $options['showCaption'] = array('default' => FALSE);

    return $options;
  }

  /**
   * Render the given style.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $options['hoverPause'] = array('default' => FALSE);

    $form['hoverPause'] = array(
      '#type' => 'checkbox',
      '#title' => t('Pause on hover'),
      '#default_value' => $this->options['hoverPause'],
    );

    $form['autoPlay'] = array(
      '#type' => 'checkbox',
      '#title' => t('Auto-play'),
      '#default_value' => $this->options['hoverPause'],
    );

    $form['carousel'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use carousel for pagination'),
      '#default_value' => $this->options['carousel'],
    );

    $form['speed'] = array(
      '#type' => 'textfield',
      '#title' => t('Slide delay'),
      '#default_value' => $this->options['speed'],
    );

    $form['animationSpeed'] = array(
      '#type' => 'textfield',
      '#title' => t('Animation speed'),
      '#default_value' => $this->options['animationSpeed'],
    );

    $form['thumbOpacity'] = array(
      '#type' => 'textfield',
      '#title' => t('Thumbnail opacity'),
      '#default_value' => $this->options['thumbOpacity'],
    );

    $form['showCapiton'] = array(
      '#type' => 'checkbox',
      '#title' => t('Show caption'),
      '#default_value' => $this->options['carousel'],
    );
  }
}
