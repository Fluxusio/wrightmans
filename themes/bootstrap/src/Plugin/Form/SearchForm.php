<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Form\SearchForm.
 */

namespace Drupal\bootstrap\Plugin\Form;

use Drupal\bootstrap\Annotation\BootstrapForm;
use Drupal\bootstrap\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 *
<<<<<<< HEAD
 * @ingroup plugins_form
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapForm("search_form")
 */
class SearchForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function alterForm(array &$form, FormStateInterface $form_state, $form_id = NULL) {
    $e = Element::create($form, $form_state);
    $e->advanced->setProperty('collapsible', TRUE);
    $e->advanced->setProperty('collapsed', TRUE);
    $e->basic->removeClass('container-inline');
    $e->basic->submit->setProperty('icon_only', TRUE);
    $e->basic->keys->setProperty('input_group_button', TRUE);
  }

}
