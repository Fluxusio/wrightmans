<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Forms\FormsSmartDescriptions.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Forms;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "forms_smart_descriptions" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "forms_smart_descriptions",
 *   type = "checkbox",
 *   title = @Translation("Smart form descriptions (via Tooltips)"),
 *   defaultValue = 1,
 *   description = @Translation("Convert descriptions into tooltips (must be enabled) automatically based on certain criteria. This helps reduce the, sometimes unnecessary, amount of noise on a page full of form elements."),
 *   groups = {
 *     "general" = @Translation("General"),
 *     "forms" = @Translation("Forms"),
 *   },
 * )
 */
class FormsSmartDescriptions extends SettingBase {}
