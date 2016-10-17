<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\PreprocessInterface.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

/**
 * Defines the interface for an object oriented preprocess plugin.
<<<<<<< HEAD
 *
 * @ingroup plugins_preprocess
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
interface PreprocessInterface {

  /**
   * Preprocess theme hook variables.
   *
   * @param array $variables
   *   The variables array, passed by reference (modify in place).
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   */
  public function preprocess(array &$variables, $hook, array $info);

}
