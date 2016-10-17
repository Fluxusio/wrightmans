<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Tables\TableResponsive.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Tables;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "table_responsive" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "table_responsive",
 *   type = "select",
 *   title = @Translation("Responsive tables"),
 *   description = @Translation("Wraps tables with <code>.table-responsive</code> to make them horizontally scroll when viewing them on devices under 768px. When viewing on devices larger than 768px, you will not see a difference in the presentational aspect of these tables. The <code>Automatic</code> option will only apply this setting for front-end facing tables, not the tables in administrative areas."),
 *   defaultValue = -1,
 *   weight = 1,
=======
 * @BootstrapSetting(
 *   id = "table_responsive",
 *   type = "checkbox",
 *   title = @Translation("Responsive tables"),
 *   description = @Translation("Makes tables responsive by wrapping them in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables."),
 *   defaultValue = 1,
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *   groups = {
 *     "general" = @Translation("General"),
 *     "tables" = @Translation("Tables"),
 *   },
<<<<<<< HEAD
 *   options = {
 *     "-1" = @Translation("Automatic"),
 *     "0" = @Translation("Disabled"),
 *     "1" = @Translation("Enabled"),
 *   },
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * )
 */
class TableResponsive extends SettingBase {}
