<?php


class AviatorsPalette {
  private $loadedCss = array();

  /**
   * @return AviatorsPalette
   */
  public static function getPalette() {
    static $palette = NULL;
    if ($palette == NULL) {
      $palette = new AviatorsPalette();
    }

    return $palette;

  }

  /**
   *
   */
  private function __construct() {
    if (isset($_SESSION['aviators']['loaded_css']) && count($_SESSION['aviators']['loaded_css'])) {
      $this->loadedCss = $_SESSION['aviators']['loaded_css'];
    } else {
      $groups = aviators_palette_collect_styles();
      foreach($groups as $group_id => $group) {
        $css_id = theme_get_setting($group_id);
        $this->addCss($group_id, $css_id, $groups[$group_id]['css'][$css_id]);
      }
    }
  }

  /**
   * @param $group_id
   * @param $css_id
   * @param $css
   * @param $commands
   */
  public function addCss($group_id, $css_id, $css, &$commands = array()) {
    $old_css = NULL;
    if(isset($this->loadedCss[$group_id])) {
      // we are keeping only one css per group
      $old_css = reset($this->loadedCss[$group_id]);
      // removing old css ids
      unset($this->loadedCss[$group_id]);
    }

    // perform all disable commands
    if (!is_null($old_css) && isset($old_css['commands']['disable'])) {
      foreach ($old_css['commands']['disable'] as $command) {
        $commands[] = ajax_command_invoke($command['selector'], $command['action'], $command['arguments']);
      }
    }

    $this->loadedCss[$group_id][$css_id] = $css;
    // we might be dealing only with commands - no file
    if(isset($css['file'])) {
      drupal_add_css($css['file']);
    }
  }

  /**
   * @param array $commands
   * @return bool|string
   */
  public function applyCss(&$commands = NULL) {
    global $base_url;
    $addCss = array();
    foreach ($this->loadedCss as $group) {
      foreach ($group as $css) {

        if(isset($css['file'])) {
          $addCss[$css['file']] = '<link type="text/css" rel="stylesheet" href=" ' . $base_url . '/' . $css['file'] . '" media="all" scoped="scoped" />';
        }

        if (isset($css['commands']['enable'])) {
          foreach ($css['commands']['enable'] as $command) {
            $commands[] = ajax_command_invoke($command['selector'], $command['action'], $command['arguments']);
          }
        }
      }
    }
    if(count($addCss)) {
      return implode('\n',$addCss);
    } else {
      return '';
    }
  }

  public function applyJs() {
    foreach ($this->loadedCss as $group) {
      foreach ($group as $css) {
        if (isset($css['commands']['enable'])) {
          foreach ($css['commands']['enable'] as $command) {
            $selector = $command["selector"];
            $action = $command["action"];
            $arguments = implode(',', $command["arguments"]);

            $commands[] = 'jQuery("' . $selector . '").' . $action . '("' . $arguments . '");';
          }
        }
      }
    }

    $output = "<script>";
    $output .= implode(' ', $commands);
    $output .= "</script>";

    return $output;
  }


  public function resetCss(&$commands = array()) {
    foreach($this->loadedCss as $group) {
      // we are keeping only one css per group
      $old_css = reset($group);

      // perform all disable commands
      if (isset($old_css['commands']['disable'])) {
        foreach ($old_css['commands']['disable'] as $command) {
          $commands[] = ajax_command_invoke($command['selector'], $command['action'], $command['arguments']);
        }
      }
    }

    $this->loadedCss = array();

    $groups = aviators_palette_collect_styles();
    foreach($groups as $group_id => $group) {
      $css_id = theme_get_setting($group_id);
      $this->addCss($group_id, $css_id, $groups[$group_id]['css'][$css_id]);
    }
  }

  public function getCss() {
    return $this->loadedCss;
  }


  public function storeCss() {
    $_SESSION['aviators']['loaded_css'] = $this->loadedCss;
  }
}