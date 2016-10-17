<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Prerender\PrerenderInterface.
 */

namespace Drupal\bootstrap\Plugin\Prerender;

/**
 * Defines the interface for an object oriented preprocess plugin.
<<<<<<< HEAD
 *
 * @ingroup plugins_prerender
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
interface PrerenderInterface {

  /**
   * Pre-render render array element callback.
   *
   * @param array $element
   *   The render array element.
   *
   * @return array
   *   The modified render array element.
   */
  public static function preRender(array $element);

}
