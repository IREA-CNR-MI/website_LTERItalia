<?php


/**
 *
 */
function aviators_map_field_formatter_info() {
  return array(
    'google_map_field_aviators' => array(
      'label' => t('Aviators formatter needed for Views'),
      'field types' => array('google_map_field'),
      'settings' => array(),
    ),
    'google_map_views_formatter' => array(
      'label' => t('Display map through Views'),
      'field types' => array('google_map_field'),
      'settings' => array(
        'view' => '',
        'display' => '',
      )
    ),
  );
}


function aviators_map_field_formatter_settings_form($field, $instance, $view_mode, $form, &$form_state) {
  $display = $instance['display'][$view_mode];
  $settings = $display['settings'];
  $element = array();

  if ($display['type'] == 'google_map_views_formatter') {

    $views = views_get_enabled_views();
    $display_views = array();
    foreach ($views as $name => $view) {
      if ($view->base_table == 'node') {
        $display_views[$name] = check_plain($view->human_name);
      }
    }

    $element['view'] = array(
      '#title' => t('View'),
      '#type' => 'select',
      '#default_value' => $settings['view'],
      '#required' => TRUE,
      '#options' => $display_views,
      '#ajax' => array(
        'callback' => 'aviators_gmap_ui_ajax_reload_display',
        'wrapper' => 'field-display-overview-wrapper',
        'effect' => 'fade',
      )
    );

    $view_name = $settings['view'];
    if (isset($form_state['values']['fields'][$field['field_name']]['settings_edit_form']['settings']['view'])) {
      $view_name = $form_state['values']['fields'][$field['field_name']]['settings_edit_form']['settings']['view'];
    }

    // Get displays of selected view.
    $display_view = views_get_view($view_name);
    $display_options = array();
    foreach ($display_view->display as $key => $display) {
      $display_options[$key] = $display->display_title;
    }

    if (count($display_options)) {
      $element['display'] = array(
        '#title' => t('Display'),
        '#type' => 'select',
        '#default_value' => $settings['display'],
        '#required' => TRUE,
        '#options' => $display_options,
      );
    }
  }

  return $element;
}

/**
 * @param $form
 * @param $form_state
 */
function aviators_gmap_ui_ajax_reload_display(&$form, &$form_state) {
  $form_state['rebuild'];

  return $form['fields'];
}


function aviators_map_field_formatter_settings_summary($field, $instance, $view_mode) {
  $settings = $instance['display'][$view_mode]['settings'];

  $display = $instance['display'][$view_mode];
  $settings = $display['settings'];

  switch ($display['type']) {
    case 'google_map_field_aviators':
      $options = image_style_options();
      $lines[] = t('Main style: !style', array('!style' => $options[$settings['main_style']]));
      $lines[] = t('Thumbnail style: !style', array('!style' => $options[$settings['thumbnail_style']]));
      break;
    case 'google_map_views_formatter':
      $lines[] = t('View: !view', array('!view' => $settings['view']));
      $lines[] = t('Display: !display', array('!display' => $settings['display']));
      break;
  }

  return implode('<br />', $lines);
}


function aviators_map_field_formatter_view(
  $entity_type,
  $entity,
  $field,
  $instance,
  $langcode,
  &$items,
  $display
) {
  switch ($display['type']) {

    case 'google_map_field_aviators':
      foreach ($items as $item) {
        $element[]['#markup'] = $item['lat'] . ':' . $item['lon'];
      }
      break;

    case 'google_map_views_formatter':
      $view_name = $display['settings']['view'];
      $view_display = $display['settings']['display'];
      $args[] = entity_id($entity_type, $entity);
      $formatter_view = views_get_view($view_name);
      $element[]['#markup'] = $formatter_view->preview($view_display, $args);
      break;
  }


  return $element;
}

