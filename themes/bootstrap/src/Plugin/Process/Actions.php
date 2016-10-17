<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Process\Actions.
 */

namespace Drupal\bootstrap\Plugin\Process;

use Drupal\bootstrap\Annotation\BootstrapProcess;
use Drupal\bootstrap\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * Processes the "actions" element.
 *
<<<<<<< HEAD
 * @ingroup plugins_process
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapProcess("actions")
 */
class Actions extends ProcessBase implements ProcessInterface {

  /**
   * {@inheritdoc}
   */
  public static function processElement(Element $element, FormStateInterface $form_state, array &$complete_form) {
    foreach ($element->children() as $child) {
<<<<<<< HEAD
      if ($child->isPropertyEmpty('icon')) {
        $child->setIcon();
      }
=======
      $child->setIcon();
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    }
  }

}
