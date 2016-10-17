<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\JavaScript\Modals\ModalSize.
 */

namespace Drupal\bootstrap\Plugin\Setting\JavaScript\Modals;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "modal_size" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "modal_size",
 *   type = "select",
 *   title = @Translation("Default modal size"),
 *   defaultValue = "",
<<<<<<< HEAD
 *   description = @Translation("Defines the modal size between the default, <code>modal-sm</code> and <code>modal-lg</code>."),
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *   empty_option = @Translation("Normal"),
 *   groups = {
 *     "javascript" = @Translation("JavaScript"),
 *     "modals" = @Translation("Modals"),
 *     "options" = @Translation("Options"),
 *   },
 *   options = {
 *     "modal-sm" = @Translation("Small"),
 *     "modal-lg" = @Translation("Large"),
 *   },
 * )
 */
class ModalSize extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return !!$this->theme->getSetting('modal_enabled');
  }

}
