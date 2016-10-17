<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Process\ActionsDropbutton.
 */

namespace Drupal\bootstrap\Plugin\Process;

use Drupal\bootstrap\Annotation\BootstrapProcess;
use Drupal\bootstrap\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * Replaces the process callback for dropbuttons on an "actions" element.
 *
<<<<<<< HEAD
 * @ingroup plugins_process
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapProcess("actions__dropbutton",
 *   replace = "Drupal\Core\Render\Element\Actions::preRenderActionsDropbutton",
 * )
 *
 * @see \Drupal\Core\Render\Element\Actions::preRenderActionsDropbutton()
 *
 * @todo This may become a #pre_render callback.
 */
class ActionsDropbutton extends ProcessBase implements ProcessInterface {

  /**
   * {@inheritdoc}
   */
  public static function processElement(Element $element, FormStateInterface $form_state, array &$complete_form) {
    $dropbuttons = Element::create();
    foreach ($element->children(TRUE) as $key => $child) {
      if ($dropbutton = $child->getProperty('dropbutton')) {
        // If there is no dropbutton for this button group yet, create one.
        if (!isset($dropbuttons->$dropbutton)) {
          $dropbuttons->$dropbutton = ['#type' => 'dropbutton'];
        }

        $dropbuttons[$dropbutton]['#links'][$key] = $child->getArray();

        // Remove original child from the element so it's not rendered twice.
<<<<<<< HEAD
        $child->setProperty('printed', TRUE);
=======
        unset($element->$key);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      }
    }
    $element->exchangeArray($dropbuttons->getArray() + $element->getArray());
  }

}
