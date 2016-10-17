<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Form\FormBase.
 */

namespace Drupal\bootstrap\Plugin\Form;

use Drupal\bootstrap\Plugin\PluginBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Base form alter class.
<<<<<<< HEAD
 *
 * @ingroup plugins_form
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class FormBase extends PluginBase implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function alterForm(array &$form, FormStateInterface $form_state, $form_id = NULL) {}

  /**
   * {@inheritdoc}
   */
  public static function submitForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public static function validateForm(array &$form, FormStateInterface $form_state) {}

}
