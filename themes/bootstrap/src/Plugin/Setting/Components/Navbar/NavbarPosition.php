<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Components\Navbar\NavbarPosition.
 */

namespace Drupal\bootstrap\Plugin\Setting\Components\Navbar;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "navbar_position" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "navbar_position",
 *   type = "select",
 *   title = @Translation("Navbar Position"),
<<<<<<< HEAD
 *   description = @Translation("Determines where the navbar is positioned on the page."),
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *   defaultValue = "",
 *   groups = {
 *     "components" = @Translation("Components"),
 *     "navbar" = @Translation("Navbar"),
 *   },
 *   empty_option = @Translation("Normal"),
 *   options = {
 *     "static-top" = @Translation("Static Top"),
 *     "fixed-top" = @Translation("Fixed Top"),
 *     "fixed-bottom" = @Translation("Fixed Bottom"),
 *   },
 * )
 */
class NavbarPosition extends SettingBase {}
