<?php
/**
 * @param $form
 * @param $form_state
 */
function realia_form_system_theme_settings_alter(&$form, $form_state) {
  include('template.php');
  $form['theme_realia_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Realia settings')
  );

  $groups = realia_aviators_collect_styles();

  foreach ($groups as $group_id => $group) {
    $options = array();

    foreach ($group['css'] as $delta => $css) {
      $options[$delta] = $css['label'];
    }
    $setting = theme_get_setting($group_id);
    $form['theme_realia_settings'][$group_id] = array(
      '#type' => 'radios',
      '#title' => $group['label'],
      '#id' => str_replace('_', '-', $group_id . '-' . $delta),
      '#options' => $options,
      '#default_value' => !empty($setting) ? $setting : reset(array_keys($options)),
    );

    $currency = theme_get_setting('currency');

    $form['theme_realia_settings']['currency'] = array(
      '#type' => 'textfield',
      '#title' => t('Currency'),
      '#size' => 6,
      '#default_value' => !empty($currency) ? $currency : 'USD',
      '#description' => t('Please enter <b>valid</b> currency code'),
      '#weight' => 20,
    );

    $prefix_currency = theme_get_setting('prefix_currency');

    $form['theme_realia_settings']['prefix_currency'] = array(
      '#type' => 'checkbox',
      '#title' => t('Prefix currency'),
      '#default_value' => isset($prefix_currency) ? $prefix_currency : true,
      '#weight' => 21,
      '#description' => t('If not checked, currency will display as suffix'),
    );
  }
}
