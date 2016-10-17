<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\Page.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
<<<<<<< HEAD
=======
use Drupal\bootstrap\Utility\DrupalAttributes;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "page" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("page")
 */
class Page extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessVariables(Variables $variables) {
    // Setup default attributes.
    $variables->getAttributes($variables::NAVBAR);
    $variables->getAttributes($variables::HEADER);
    $variables->getAttributes($variables::CONTENT);
    $variables->getAttributes($variables::FOOTER);
    $this->preprocessAttributes();
=======
  public function preprocessVariables(Variables $variables, $hook, array $info) {
    // Setup default attributes.
    $variables->getAttributes(DrupalAttributes::NAVBAR);
    $variables->getAttributes(DrupalAttributes::HEADER);
    $variables->getAttributes(DrupalAttributes::CONTENT);
    $variables->getAttributes(DrupalAttributes::FOOTER);
    $this->preprocessAttributes($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
