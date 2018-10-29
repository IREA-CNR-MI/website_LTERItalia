<?php
/**
 * This file holds various preprocess functions for nodes
 */

/**
 * Preprocess for a nodes with 'grid' display
 * @param $variables
 */
function _realia_preprocess_node_display_grid(&$variables) {
  $content = & $variables['content'];

  $attributes = array(
    'class' => array('field-bathroom-count'),
  );
  _realia_wrap_field('field_bathrooms', $content, $attributes);

  $attributes = array(
    'class' => array('field-bedroom-count'),
  );

  _realia_wrap_field('field_bedrooms', $content, $attributes);
  _realia_group_fields(array('field_image', 'field_price'), 'field-apartment-group', $content);
}

/**
 * Helper function for wrapping fields with additional classes - attributes
 * @param $field_name
 * @param $content
 * @param $attributes
 */
function _realia_wrap_field($field_name, &$content, $attributes = array()) {

  $attributes['class'][] = 'field-wrapper';

  if (isset($content[$field_name])) {
    $tmp = $content[$field_name];
    $content[$field_name] = array(
      '#type' => 'container',
      '#attributes' => $attributes,
      '#weight' => $tmp['#weight'],
      'field_bathrooms' => $tmp,
    );
  }
}

/**
 * Helper function fro grouping field with additional classes - attributes
 * @param array $field_names
 *  Array of group names, which to group. Order of field names is important as whole group inherits weight from
 *  first field in array
 * @param $group_name
 *  Element index - use machine name
 * @param $content
 *  Nodes pre-build content
 * @param $attributes
 *  Attributes we want to assign to group
 */
function _realia_group_fields(array $field_names, $group_name, &$content, $attributes = array()) {
  $attributes['class'][] = 'field-group-wrapper';
  $attributes['class'][] = 'field-group-' . $group_name;

  $content[$group_name] = array(
    '#type' => 'container',
    '#attributes' => $attributes,
  );

  foreach ($field_names as $field_name) {
    if (!isset($content[$field_name])) {
      continue;
    }

    $field = $content[$field_name];
    unset($content[$field_name]);
    //first element
    if (reset($field_names) == $field_name) {
      // inherit weight from first element
      $content[$group_name]['#weight'] = $field['#weight'];
    }
    $content[$group_name][$field_name] = $field;
  }
}