<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\InputButton.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
<<<<<<< HEAD
use Drupal\bootstrap\Utility\Element;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "input__button" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("input__button")
 */
class InputButton extends Input implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessElement(Element $element, Variables $variables) {
    $element->colorize();
    $element->setButtonSize();
    $element->setIcon($element->getProperty('icon'));
    $variables['icon_only'] = $element->getProperty('icon_only');
    $variables['label'] = $element->getProperty('value');
    if ($element->getProperty('split')) {
      $variables->map([$variables::SPLIT_BUTTON]);
    }
    parent::preprocessElement($element, $variables);
=======
  public function preprocessElement(Variables $variables, $hook, array $info) {
    $variables->element->colorize();
    $variables->element->setButtonSize();
    $variables->element->setIcon($variables->element->getProperty('icon'));
    $variables['icon_only'] = $variables->element->getProperty('icon_only');
    $variables['label'] = $variables->element->getProperty('value');
    if ($variables->element->getProperty('split')) {
      $variables->map([$variables::SPLIT_BUTTON]);
    }
    parent::preprocessElement($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
