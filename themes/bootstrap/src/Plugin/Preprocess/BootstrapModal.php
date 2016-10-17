<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\BootstrapModal.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
use Drupal\bootstrap\Utility\Variables;
use Drupal\Component\Utility\Html;

/**
 * Pre-processes variables for the "bootstrap_modal" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("bootstrap_modal")
 */
class BootstrapModal extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function preprocessVariables(Variables $variables) {
=======
  protected function preprocessVariables(Variables $variables, $hook, array $info) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    // Immediately log an error and return if Bootstrap modals are not enabled.
    if (!$this->theme->getSetting('modal_enabled')) {
      \Drupal::logger('bootstrap')->error(t('Bootstrap modals are not enabled.'));
      return;
    }

    // Retrieve the ID, generating one if needed.
    $id = $variables->getAttribute('id', Html::getUniqueId($variables->offsetGet('id', 'bootstrap-modal')));
    $variables->setAttribute('id', $id);
    unset($variables['id']);

    if ($variables->title) {
      $title_id = $variables->getAttribute('id', "$id--title", $variables::TITLE);
      $variables->setAttribute('id', $title_id, $variables::TITLE);
      $variables->setAttribute('aria-labelledby', $title_id);
    }

    // Use a provided modal size or retrieve the default theme setting.
    $variables->size = $variables->size ?: $this->theme->getSetting('modal_size');

    // Convert the description variable.
<<<<<<< HEAD
    $this->preprocessDescription();

    // Ensure all attributes are proper objects.
    $this->preprocessAttributes();
=======
    $this->preprocessDescription($variables, $hook, $info);

    // Ensure all attributes are proper objects.
    $this->preprocessAttributes($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
