<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Forms\FormsHasErrorValueToggle.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Forms;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "forms_has_error_value_toggle" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "forms_has_error_value_toggle",
 *   type = "checkbox",
 *   title = @Translation("Automatically remove error classes when values have been entered"),
 *   description = @Translation("If an element has a <code>.has-error</code> class attached to it, enabling this will automatically remove that class when a value is entered."),
 *   defaultValue = 1,
 *   groups = {
 *     "general" = @Translation("General"),
 *     "forms" = @Translation("Forms"),
 *   },
 * )
 */
class FormsHasErrorValueToggle extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return TRUE;
  }

}
