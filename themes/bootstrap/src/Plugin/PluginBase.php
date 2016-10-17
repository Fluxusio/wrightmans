<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\PluginBase.
 */

namespace Drupal\bootstrap\Plugin;

use Drupal\bootstrap\Bootstrap;

/**
 * Base class for an update.
<<<<<<< HEAD
 *
 * @ingroup utility
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class PluginBase extends \Drupal\Core\Plugin\PluginBase {

  /**
   * The currently set theme object.
   *
   * @var \Drupal\bootstrap\Theme
   */
  protected $theme;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    if (!isset($configuration['theme'])) {
      $configuration['theme'] = Bootstrap::getTheme();
    }
    $this->theme = $configuration['theme'];
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

}
