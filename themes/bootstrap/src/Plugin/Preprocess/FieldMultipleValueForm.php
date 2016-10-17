<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\FieldMultipleValueForm.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
<<<<<<< HEAD
use Drupal\bootstrap\Utility\Element;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "field_multiple_value_form" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("field_multiple_value_form")
 */
class FieldMultipleValueForm extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessElement(Element $element, Variables $variables) {
=======
  public function preprocessElement(Variables $variables, $hook, array $info) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    // Wrap header columns in label element for Bootstrap.
    if ($variables['multiple']) {
      $header = [
        [
          'data' => [
            '#prefix' => '<label class="label">',
<<<<<<< HEAD
            'title' => ['#markup' => $element->getProperty('title')],
            '#suffix' => '</label>',
          ],
          'colspan' => 2,
          'class' => [
            'field-label',
            !empty($element['#required']) ? 'form-required' : '',
          ],
=======
            'title' => ['#markup' => $variables->element->getProperty('title')],
            '#suffix' => '</label>',
          ],
          'colspan' => 2,
          'class' => ['field-label'],
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
        ],
        t('Order', [], ['context' => 'Sort order']),
      ];

      $variables['table']['#header'] = $header;
    }
  }

}
