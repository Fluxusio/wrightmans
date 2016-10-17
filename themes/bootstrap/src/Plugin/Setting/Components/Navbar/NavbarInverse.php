<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Components\Navbar\NavbarInverse.
 */

namespace Drupal\bootstrap\Plugin\Setting\Components\Navbar;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "navbar_inverse" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "navbar_inverse",
 *   type = "checkbox",
 *   title = @Translation("Inverse navbar style"),
 *   description = @Translation("Select if you want the inverse navbar style."),
 *   defaultValue = 0,
 *   groups = {
 *     "components" = @Translation("Components"),
 *     "navbar" = @Translation("Navbar"),
 *   },
 * )
 */
class NavbarInverse extends SettingBase {}
