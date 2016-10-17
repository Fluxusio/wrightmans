<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\Links.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
use Drupal\bootstrap\Utility\Element;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "links" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("links")
 */
class Links extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessVariables(Variables $variables) {
=======
  public function preprocessVariables(Variables $variables, $hook, array $info) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    if ($variables->theme_hook_original === 'links' && $variables->hasClass('operations')) {
      $variables->addClass('list-inline');
      foreach ($variables->links as &$data) {
        $link = Element::create($data['link']);
        $link->addClass(['btn', 'btn-sm']);
        $link->colorize();
        $link->setIcon();
<<<<<<< HEAD
        if ($this->theme->getSetting('tooltip_enabled')) {
=======
        if ($icon = $link->getProperty('icon')) {
          $link->addClass('icon-before');
          $title = [
            'icon' => $icon,
            'title' => [
              '#markup' => $link->getProperty('title'),
            ],
          ];
          $link->setProperty('title', Element::create($title));
        }
        if (($options = &$link->getProperty('options', [])) && isset($options['attributes']['title'])) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
          $link->setAttribute('data-toggle', 'tooltip');
          $link->setAttribute('data-placement', 'bottom');
        }
      }
    }
<<<<<<< HEAD
    $this->preprocessAttributes();
=======
    $this->preprocessAttributes($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
