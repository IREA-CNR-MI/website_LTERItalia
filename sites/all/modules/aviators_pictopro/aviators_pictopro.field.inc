<?php


/**
 * Implements hook_field_info()
 * @return array
 */
function aviators_pictopro_field_info() {
  return array(
    'pictopro' => array(
      'label' => t('Pictopro'),
      'description' => t('This field stores varchar text in the database.'),
      'settings' => array('size' => 60),
      'default_formatter' => 'pictopro_icon',
      'default_widget' => 'pictopro_icon',
    ),
  );
}

/**
 * Implements hook_field_is_empty()
 * @param $item
 * @param $value
 * @return bool
 */
function aviators_pictopro_field_is_empty($item, $value) {
  return FALSE;
}

/**
 * Implements hook_field_widget_info()
 * @return array
 */
function aviators_pictopro_field_widget_info() {
  return array(
    'pictopro_icon' => array(
      'label' => t('PictoPro icon'),
      'field types' => array('pictopro'),
      'settings' => array('size' => 60),
      'behaviors' => array(
        'multiple values' => FIELD_BEHAVIOR_DEFAULT,
        'default value' => FIELD_BEHAVIOR_DEFAULT,
      ),
    ),
  );
}

/**
 * Implements hook_field_widget_form
 * @param $form
 * @param $form_state
 * @param $field
 * @param $instance
 * @param $langcode
 * @param $items
 * @param $delta
 * @param $element
 * @return array
 */
function aviators_pictopro_field_widget_form(&$form, &$form_state, $field, $instance, $langcode, $items, $delta, $element) {
  drupal_add_css(drupal_get_path('module', 'aviators_pictopro') . '/pictopro-normal/pictopro-normal.css');
  drupal_add_css(drupal_get_path('module', 'aviators_pictopro') . '/pictopro-outline/pictopro-outline.css');

  $icons = _aviators_pictopro_get_icons();
  foreach($icons as $delta => $icon) {
    $options[$delta] = '<span class="icon ' . $delta . '"></span>';
  }

  $icons = _aviators_pictopro_get_icons('outline');
  foreach($icons as $delta => $icon) {
    $options[$delta] = '<span class="icon ' . $delta . '"></span>';
  }

  drupal_add_css('.field-type-pictopro .form-radios > div { display: inline-block; width: 50px; font-size:24px !important; }', 'inline');

  if($field['cardinality'] == 1) {
    $element['value'] = array(
      '#title' => $instance['label'],
      '#type' => 'radios',
      '#options' => $options,
      '#default_value' => !empty($items[0]) ? $items[0]['value'] : null,
    );
  } else {
    $element['value'] = array(
      '#type' => 'checkboxes',
      '#options' => $options
    );
  }

  return array('value' => $element);
}


/**
 *
 */
function aviators_pictopro_field_formatter_info() {
  return array(
    'pictopro_icon' => array(
      'label' => t('Pictopro Icon'),
      'field types' => array('pictopro'),
    ),
  );
}

function aviators_pictopro_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {
  $element = array();
  switch ($display['type']) {
    case 'pictopro_icon':
      drupal_add_css(drupal_get_path('module', 'aviators_pictopro') . '/pictopro-normal/pictopro-normal.css');
      drupal_add_css(drupal_get_path('module', 'aviators_pictopro') . '/pictopro-outline/pictopro-outline.css');

      foreach($items as $delta => $item) {
        $element[$delta]['#markup'] = '<div class="pictopro-icon"><div class="'.$item['value'] .' icon"></div></div>';
      }
      break;

  }
  return  $element;
}