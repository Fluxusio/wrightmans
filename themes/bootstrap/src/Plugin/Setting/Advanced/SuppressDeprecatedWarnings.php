<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Advanced\SuppressDeprecatedWarnings.
 */

namespace Drupal\bootstrap\Plugin\Setting\Advanced;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Form\FormStateInterface;

/**
 * The "suppress_deprecated_warnings" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "suppress_deprecated_warnings",
 *   type = "checkbox",
 *   weight = -2,
 *   title = @Translation("Suppress deprecated warnings"),
 *   defaultValue = 0,
<<<<<<< HEAD
 *   description = @Translation("Enable this setting if you wish to suppress deprecated warning messages. <strong class='error text-error'>WARNING: Suppressing these messages does not &quote;fix&quote; the problem and you will inevitably encounter issues when they are removed in future updates. Only use this setting in extreme and necessary circumstances.</strong>"),
=======
 *   description = @Translation("Enable this setting if you wish to suppress deprecated warning messages. WARNING: Suppressing these messages does not &quote;fix&quote; the problem and you will inevitably encounter issues when they are removed in future updates. Only use this setting in extreme and necessary circumstances."),
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *   groups = {
 *     "advanced" = @Translation("Advanced"),
 *   },
 * )
 */
class SuppressDeprecatedWarnings extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function alterForm(array &$form, FormStateInterface $form_state, $form_id = NULL) {
    $setting = $this->getElement($form, $form_state);
    $setting->setProperty('states', [
      'visible' => [
        ':input[name="include_deprecated"]' => ['checked' => TRUE],
      ],
    ]);
  }

}
