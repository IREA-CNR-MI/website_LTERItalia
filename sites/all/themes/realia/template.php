<?php

include 'node.preprocess.inc';

function realia_aviators_collect_styles() {
  return array(
    'header' => array(
      'label' => t('Header variants'),
      'css' => array(
        'simple' => array(
          'label' => 'light',
          'class' => 'myclass',
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('header-light'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('header-light'))
            )
          )
        ),
        'normal' => array(
          'label' => 'normal',
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('header-normal'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('header-normal'))
            )
          )
        ),
        'dark' => array(
          'label' => 'dark',
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('header-dark'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('header-dark'))
            )
          )
        ),

      ),
    ),
    'background' => array(
      'label' => t('Background patterns'),
      'css' => array(
        'cloth_alike' => array(
          'label' => 'cloth_alike',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-cloth-alike')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-cloth-alike')
              )
            )
          )
        ),
        'corrugation' => array(
          'label' => 'corrugation',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-corrugation')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-corrugation')
              )
            )
          )
        ),
        'diagonal_noise' => array(
          'label' => 'diagonal-noise',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-diagonal-noise')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-diagonal-noise')
              )
            )
          )
        ),
        'dust' => array(
          'label' => 'dust',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-dust')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-dust')
              )
            )
          )
        ),
        'fabric_plaid' => array(
          'label' => 'fabric plaid',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-fabric-plaid')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-fabric-plaid')
              )
            )
          )
        ),
        'farmer' => array(
          'label' => 'farmer',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-farmer')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-farmer')
              )
            )
          )
        ),
        'grid_noise' => array(
          'label' => 'grid noise',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-grid-noise')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-grid-noise')
              )
            )
          )
        ),
        'lghtmesh' => array(
          'label' => 'lghtmesh',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-lghtmesh')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-lghtmesh')
              )
            )
          )
        ),
        'pw_maze_white' => array(
          'label' => 'pw-maze-white',
          'commands' => array(
            'enable' => array(
              array(
                'selector' => 'body',
                'action' => 'addClass',
                'arguments' => array('pattern-pw-maze-white')
              )
            ),
            'disable' => array(
              array(
                'selector' => 'body',
                'action' => 'removeClass',
                'arguments' => array('pattern-pw-maze-white')
              )
            )
          )
        ),
        'none' => array(
          'label' => 'none',
          'commands' => array(
            'enable' => array(array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('none'))),
            'disable' => array(array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('none')))
          )
        ),
      ),
    ),
    'color' => array(
      'label' => t('Color settings'),
      'css' => array(
        'realia_blue' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-blue.css',
          'label' => t('Blue'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('blue'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('blue'))
            )
          )
        ),
        'realia_turquiose' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-turquiose.css',
          'label' => t('Turquiose'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('turquiose'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('turquiose'))
            )
          )
        ),
        'realia_orange' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-orange.css',
          'label' => t('Orange'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('orange'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('orange'))
            )
          )
        ),
        'realia_violet' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-violet.css',
          'label' => t('Violet'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('violet'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('violet'))
            )
          )
        ),
        'realia_green' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-green.css',
          'label' => t('Green'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('green'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('green'))
            )
          )
        ),
        'realia_gray_blue' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-blue.css',
          'label' => t('Gray blue'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('blue'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('blue'))
            )
          )
        ),
        'realia_gray_turquiose' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-turquiose.css',
          'label' => t('Gray turquiose'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('turquiose'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('turquiose'))
            )
          )
        ),
        'realia_gray_orange' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-orange.css',
          'label' => t('Gray orange'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('orange'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('orange'))
            )
          )
        ),
        'realia_gray_violet' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-violet.css',
          'label' => t('Gray violet'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('violet'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('violet'))
            )
          )
        ),
        'realia_gray_green' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-green.css',
          'label' => t('Gray green'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('green'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('green'))
            )
          )
        ),
        'realia_red' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-red.css',
          'label' => t('Red'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('red'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('red'))
            )
          )
        ),
        'realia_magenta' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-magenta.css',
          'label' => t('Magenta'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('magenta'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('magenta'))
            )
          )
        ),
        'realia_green_light' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-green-light.css',
          'label' => t('Green Light'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('green-light'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('green-light'))
            )
          )
        ),
        'realia_brown' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-brown.css',
          'label' => t('Brown'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('brown'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('brown'))
            )
          )
        ),
        'realia_brown_dark' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-brown-dark.css',
          'label' => t('Brown dark'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('brown-dark'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('brown-dark'))
            )
          )
        ),
        'realia_gray_red' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-red.css',
          'label' => t('Gray red'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('red'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('red'))
            )
          )
        ),
        'realia_gray_magenta' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-magenta.css',
          'label' => t('Gray magenta'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('magenta'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('magenta'))
            )
          )
        ),
        'realia_gray_green_light' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-green-light.css',
          'label' => t('Gray green light'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('green-light'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('green-light'))
            )
          )
        ),
        'realia_gray_brown' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-brown.css',
          'label' => t('Gray brown'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('brown'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('brown'))
            )
          )
        ),
        'realia_gray_brown_dark' => array(
          'file' => drupal_get_path('theme', 'realia') . '/css/realia-gray-brown-dark.css',
          'label' => t('Gray brown dark'),
          'commands' => array(
            'enable' => array(
              array('selector' => 'body', 'action' => 'addClass', 'arguments' => array('brown-dark'))
            ),
            'disable' => array(
              array('selector' => 'body', 'action' => 'removeClass', 'arguments' => array('brown-dark'))
            )
          )
        ),
      )
    )
  );

}

/**
 * Implements HOOK_preprocess_THEME()
 * @param $variables
 */
function realia_preprocess_html(&$variables) {
  drupal_add_library('system', 'ui.slider');
  $prefix = theme_get_setting('prefix_currency', 'realia');

  if ($prefix) {
    $prefix = TRUE;
  }
  else {
    $prefix = FALSE;
  }

  drupal_add_js(
    array(
      'theme' =>
      array(
        'currency' => theme_get_setting('currency', 'realia'),
        'prefix' => $prefix
      )
    ),
    'setting'
  );

}

/**
 * Implements HOOK_preprocess_THEME()
 * @param $variables
 */
function realia_preprocess_page(&$variables) {
  $status = drupal_get_http_header("status");
  if ($status == "404 Not Found") {
    $variables['theme_hook_suggestions'][] = 'page__404';
  }
}

/**
 * Implements HOOK_preprocess_THEME()
 * @param $variables
 */
function realia_preprocess_node(&$variables) {
  $node = $variables['node'];

  // @example: node--apartment--teaser.tpl.php
  $variables['theme_hook_suggestions'][] = 'node__' . $node->type . '__' . $variables['view_mode'];

  switch ($variables['view_mode']) {
    case 'grid':
      _realia_preprocess_node_display_grid($variables);
      break;
    default:
      break;
  }

  // add call to action specific button
  if ($node->type == 'call_to_action') {
    $class = _realia_cta_load_class($node->nid);

    if (isset($class['class'])) {
      $variables['icon_class'] = array(
        'class' => array($class['class'], 'decoration'),
      );
    }
  }
}

/**
 * Implements THEME_breadcrumb().
 */
function realia_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $breadcrumbs = '<ul class="breadcrumb">';

    $count = count($breadcrumb) - 1;
    foreach ($breadcrumb as $key => $value) {
      if ($count != $key) {
        $breadcrumbs .= '<li>' . $value . '<span class="divider">/</span></li>';
      }
      else {
        $breadcrumbs .= '<li>' . $value . '</li>';
      }
    }
    $breadcrumbs .= '</ul>';

    return $breadcrumbs;
  }
  else {
    return '<ul class="breadcrumb"><li><a href="' . url('<front>') . '">' . t('Home') . '</a></li></ul>';
  }
}

/**
 * Implements THEME_pager().
 */
function realia_pager($variables) {
  $tags = $variables['tags'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $quantity = $variables['quantity'];
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.

  $li_first = theme('pager_first', array('text' => t('first'), 'element' => $element, 'parameters' => $parameters));
  $li_previous = theme(
    'pager_previous',
    array('text' => t('previous'), 'element' => $element, 'interval' => 1, 'parameters' => $parameters)
  );
  $li_next = theme(
    'pager_next',
    array('text' => t('next'), 'element' => $element, 'interval' => 1, 'parameters' => $parameters)
  );
  $li_last = theme('pager_last', array('text' => t('last'), 'element' => $element, 'parameters' => $parameters));

  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => array('pager-first'),
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => array('pager-previous'),
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => array('pager-ellipsis'),
          'data' => '…',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => array('pager-item'),
            'data' => theme(
              'pager_previous',
              array(
                'text' => $i,
                'element' => $element,
                'interval' => ($pager_current - $i),
                'parameters' => $parameters
              )
            ),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => array('pager-current'),
            'data' => $i,
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => array('pager-item'),
            'data' => theme(
              'pager_next',
              array(
                'text' => $i,
                'element' => $element,
                'interval' => ($i - $pager_current),
                'parameters' => $parameters
              )
            ),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => array('pager-ellipsis'),
          'data' => '…',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => array('pager-next'),
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => array('pager-last'),
        'data' => $li_last,
      );
    }

    return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme(
      'item_list',
      array(
        'items' => $items,
        'attributes' => array('class' => array('pager')),
      )
    );
  }
}


function realia_form_element($variables) {

  $element = & $variables['element'];

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  // Add element #id for #type 'item'.
  if (isset($element['#markup']) && !empty($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  // Add element's #type and #name as class to aid with JS/CSS selectors.
  $attributes['class'] = array('form-item');
  if (!empty($element['#type'])) {
    $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
  }
  if (!empty($element['#name'])) {
    $attributes['class'][] = 'form-item-' . strtr(
        $element['#name'],
        array(' ' => '-', '_' => '-', '[' => '-', ']' => '')
      );
  }
  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }
  $label = TRUE;

  if ($element['#type'] == 'radio') {
    $styles = realia_aviators_collect_styles();
    if (in_array($element['#array_parents'][0], array_keys($styles))) {
      $label = FALSE;
      if (isset($element['#return_value'])) {
        $attributes['class'][] = str_replace('_', '-', $element['#return_value']);
      }
    }
  }

  if (!$label) {
    $element_output = '<div' . drupal_attributes($attributes) . '>';
  }
  else {
    $output = '<div' . drupal_attributes($attributes) . '>' . "\n";
  }

  if ($element['#type'] == 'radio') {
    if (!$label) {
      $element = $variables['element'];
      // This is also used in the installer, pre-database setup.
      $t = get_t();

      // If the element is required, a required marker is appended to the label.
      $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';

      $title = filter_xss_admin($element['#title']);

      $attributes = array();
      // Style the label as class option to display inline with the element.
      if ($element['#title_display'] == 'after') {
        $attributes['class'] = 'option';
      }
      // Show label only to screen readers to avoid disruption in visual flows.
      elseif ($element['#title_display'] == 'invisible') {
        $attributes['class'] = 'element-invisible';
      }

      if (!empty($element['#id'])) {
        $attributes['for'] = $element['#id'];
      }


      // The leading whitespace helps visually separate fields from inline labels.
      $output = $element_output . '<label' . drupal_attributes($attributes) . '>' . $element['#children'] . $t(
          '!title !required',
          array('!title' => $title, '!required' => $required)
        ) . "</label>";

      if (!empty($element['#description'])) {
        $output .= '<div class="description">' . $element['#description'] . "</div>\n";
      }

      $output .= "</div>\n";
    }
  }

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }


  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  if ($label) {

    switch ($element['#title_display']) {
      case 'before':
      case 'invisible':
        $output .= ' ' . theme('form_element_label', $variables);
        $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
        break;

      case 'after':
        $output .= ' ' . $prefix . $element['#children'] . $suffix;
        $output .= ' ' . theme('form_element_label', $variables) . "\n";
        break;

      case 'none':
      case 'attribute':
        // Output no label and no required marker, only the children.
        $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
        break;
    }
  }

  if ($label) {
    if (!empty($element['#description'])) {
      $output .= '<div class="description">' . $element['#description'] . "</div>\n";
    }

    $output .= "</div>\n";
  }

  return $output;
}

function realia_radio(&$variables) {

  $element = $variables['element'];
  $element['#attributes']['type'] = 'radio';
  element_set_attributes($element, array('id', 'name', '#return_value' => 'value'));

  if (isset($element['#return_value']) && $element['#value'] !== FALSE && $element['#value'] == $element['#return_value']) {
    $element['#attributes']['checked'] = 'checked';
  }

  _form_set_class($element, array('form-radio'));

  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}