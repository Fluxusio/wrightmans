<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Buttons\ButtonIconize.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Buttons;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "button_iconize" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "button_iconize",
 *   type = "checkbox",
 *   title = @Translation("Iconize Buttons"),
 *   defaultValue = 1,
 *   description = @Translation("Adds icons to buttons based on the text value"),
 *   groups = {
 *     "general" = @Translation("General"),
 *     "button" = @Translation("Buttons"),
 *   },
 *   see = {
 *     "http://drupal-bootstrap.org/apis/hook_bootstrap_iconize_text_alter" = @Translation("hook_bootstrap_iconize_text_alter()"),
 *   },
 * )
 */
class ButtonIconize extends SettingBase {}
