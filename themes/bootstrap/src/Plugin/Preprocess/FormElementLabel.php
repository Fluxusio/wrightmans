<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\FormElementLabel.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
<<<<<<< HEAD
use Drupal\bootstrap\Utility\Element;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "form_element_label" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("form_element_label")
 */
class FormElementLabel extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessElement(Element $element, Variables $variables) {
    $variables->map(['attributes']);
    $this->preprocessAttributes();
=======
  public function preprocessElement(Variables $variables, $hook, array $info) {
    $variables->map(['attributes']);
    $this->preprocessAttributes($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
