<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Components\Breadcrumbs\Breadcrumb.
 */

namespace Drupal\bootstrap\Plugin\Setting\Components\Breadcrumbs;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "breadcrumb" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "breadcrumb",
 *   type = "select",
 *   title = @Translation("Breadcrumb visibility"),
<<<<<<< HEAD
 *   description = @Translation("Show or hide the Breadcrumbs"),
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *   defaultValue = "1",
 *   groups = {
 *     "components" = @Translation("Components"),
 *     "breadcrumbs" = @Translation("Breadcrumbs"),
 *   },
 *   options = {
 *     0 = @Translation("Hidden"),
 *     1 = @Translation("Visible"),
 *     2 = @Translation("Only in admin areas"),
 *   },
 * )
 */
class Breadcrumb extends SettingBase {}
