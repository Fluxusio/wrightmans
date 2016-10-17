<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Update\UpdateBase.
 */

namespace Drupal\bootstrap\Plugin\Update;

<<<<<<< HEAD
use Drupal\bootstrap\Bootstrap;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Plugin\PluginBase;
use Drupal\bootstrap\Theme;

/**
 * Base class for an update.
<<<<<<< HEAD
 *
 * @ingroup plugins_update
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class UpdateBase extends PluginBase implements UpdateInterface {

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return isset($this->pluginDefinition['description']) ? $this->pluginDefinition['description'] : NULL;
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function getLabel() {
    return !empty($this->pluginDefinition['label']) ? $this->pluginDefinition['label'] : NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getProvider() {
    return isset($this->pluginDefinition['provider']) ? $this->pluginDefinition['provider'] : FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getSchema() {
    return (int) $this->getPluginId();
  }

  /**
   * {@inheritdoc}
   */
  public function getSeverity() {
    return isset($this->pluginDefinition['severity']) ? $this->pluginDefinition['severity'] : FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getTheme() {
    return Bootstrap::getTheme($this->pluginDefinition['provider']);
  }

  /**
   * {@inheritdoc}
   */
  public function isPrivate() {
    return !empty($this->pluginDefinition['private']);
=======
  public function getLevel() {
    return isset($this->pluginDefinition['level']) ? $this->pluginDefinition['level'] : FALSE;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function process(Theme $theme, array &$context) {}

  /*************************
   * Deprecated methods.
   *************************/

  /**
   * {@inheritdoc}
   *
   * @deprecated 8.x-3.0-rc2, will be removed before 8.x-3.0 is released.
   *
   * @see \Drupal\bootstrap\Plugin\Update\UpdateBase::getSeverity
   */
  public function getLevel() {
    return $this->getSeverity();
=======
  public function getTitle() {
    return !empty($this->pluginDefinition['title']) ? $this->pluginDefinition['title'] : NULL;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

  /**
   * {@inheritdoc}
<<<<<<< HEAD
   *
   * @deprecated 8.x-3.0-rc2, will be removed before 8.x-3.0 is released.
   *
   * @see \Drupal\bootstrap\Plugin\Update\UpdateBase::getLabel
   */
  public function getTitle() {
    return $this->getLabel();
  }
=======
   */
  public function update(Theme $theme) {}
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

}
