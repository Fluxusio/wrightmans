<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\Region.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
use Drupal\bootstrap\Bootstrap;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "region" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("region")
 */
class Region extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessVariables(Variables $variables) {
=======
  public function preprocessVariables(Variables $variables, $hook, array $info) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    $region = $variables['elements']['#region'];
    $variables['region'] = $region;
    $variables['content'] = $variables['elements']['#children'];

    // Help region.
    if ($region === 'help' && !empty($variables['content'])) {
      $variables['content'] = [
        'icon' => Bootstrap::glyphicon('question-sign'),
        'content' => ['#markup' => $variables['content']],
      ];
      $variables->addClass(['alert', 'alert-info', 'messages', 'info']);
    }

    // Support for "well" classes in regions.
    static $region_wells;
<<<<<<< HEAD
    if (!isset($region_wells)) {
=======
    if (!isset($wells)) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      $region_wells = $this->theme->getSetting('region_wells');
    }
    if (!empty($region_wells[$region])) {
      $variables->addClass($region_wells[$region]);
    }
  }

}
