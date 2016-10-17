<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Prerender\PrerenderBase.
 */

namespace Drupal\bootstrap\Plugin\Prerender;

use Drupal\bootstrap\Utility\Element;

/**
 * Defines the interface for an object oriented preprocess plugin.
<<<<<<< HEAD
 *
 * @ingroup plugins_prerender
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class PrerenderBase implements PrerenderInterface {

  /**
   * {@inheritdoc}
   */
  public static function preRender(array $element) {
    static::preRenderElement(Element::create($element));
    return $element;
  }

  /**
   * Pre-render element callback.
   *
   * @param \Drupal\bootstrap\Utility\Element $element
   *   The element object.
   */
  public static function preRenderElement(Element $element) {}

}
