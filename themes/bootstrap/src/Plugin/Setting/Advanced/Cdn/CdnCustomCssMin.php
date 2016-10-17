<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Advanced\Cdn\CdnCustomCssMin.
 */

namespace Drupal\bootstrap\Plugin\Setting\Advanced\Cdn;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cdn_custom_css_min" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   cdn_provider = "custom",
 *   id = "cdn_custom_css_min",
 *   type = "textfield",
 *   weight = 2,
 *   title = @Translation("Minified Bootstrap CSS URL"),
 *   defaultValue = "https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css",
 *   description = @Translation("Additionally, you can provide the minimized version of the file. It will be used instead if site aggregation is enabled."),
 *   groups = {
 *     "advanced" = @Translation("Advanced"),
 *     "cdn" = @Translation("CDN (Content Delivery Network)"),
 *     "custom" = false,
 *   },
 * )
 */
class CdnCustomCssMin extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return ['library_info'];
  }

}
