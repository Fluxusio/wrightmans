<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\General\Tables\TableBordered.
 */

namespace Drupal\bootstrap\Plugin\Setting\General\Tables;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "table_bordered" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "table_bordered",
 *   type = "checkbox",
 *   title = @Translation("Bordered table"),
 *   description = @Translation("Add borders on all sides of the table and cells."),
 *   defaultValue = 0,
 *   groups = {
 *     "general" = @Translation("General"),
 *     "tables" = @Translation("Tables"),
 *   },
 * )
 */
class TableBordered extends SettingBase {}
