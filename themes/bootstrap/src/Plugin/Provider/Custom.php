<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Provider\Custom.
 */

namespace Drupal\bootstrap\Plugin\Provider;

use Drupal\bootstrap\Annotation\BootstrapProvider;
use Drupal\Core\Annotation\Translation;

/**
 * The "custom" CDN provider plugin.
 *
<<<<<<< HEAD
 * @ingroup plugins_provider
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapProvider(
 *   id = "custom",
 *   label = @Translation("Custom"),
 * )
 */
class Custom extends ProviderBase {

  /**
   * {@inheritdoc}
   */
  public function getAssets($types = NULL) {
    $this->assets = [];
<<<<<<< HEAD

    // If no type is set, return all CSS and JS.
    if (!isset($types)) {
      $types = ['css', 'js'];
    }
    $types = is_array($types) ? $types : [$types];

=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    foreach ($types as $type) {
      if ($setting = $this->theme->getSetting('cdn_custom_' . $type)) {
        $this->assets[$type][] = $setting;
      }
      if ($setting = $this->theme->getSetting('cdn_custom_' . $type . '_min')) {
        $this->assets['min'][$type][] = $setting;
      }
    }
    return parent::getAssets($types);
  }

}
