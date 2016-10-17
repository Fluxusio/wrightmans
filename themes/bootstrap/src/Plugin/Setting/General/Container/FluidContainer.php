<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Container\FluidContainer.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Container;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * Container theme settings.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "fluid_container",
 *   type = "checkbox",
 *   title = @Translation("Fluid container"),
 *   defaultValue = 0,
 *   description = @Translation("Uses the <code>.container-fluid</code> class instead of <code>.container</code>."),
 *   groups = {
 *     "general" = @Translation("General"),
 *     "container" = @Translation("Container"),
 *   },
 *   see = {
 *     "http://getbootstrap.com/css/#grid-example-fluid" = @Translation("Fluid container"),
 *   },
 * )
 */
class FluidContainer extends SettingBase {}
