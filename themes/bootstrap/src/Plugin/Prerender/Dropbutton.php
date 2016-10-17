<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Prerender\Dropbutton.
 */

namespace Drupal\bootstrap\Plugin\Prerender;

use Drupal\bootstrap\Annotation\BootstrapPrerender;
use Drupal\bootstrap\Utility\Element;

/**
<<<<<<< HEAD
 * Pre-render callback for the "dropbutton" element type.
 *
 * @ingroup plugins_prerender
=======
 * Defines the interface for an object oriented preprocess plugin.
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPrerender("dropbutton",
 *   replace = "Drupal\Core\Render\Element\Dropbutton::preRenderDropbutton"
 * )
 *
 * @see \Drupal\Core\Render\Element\Dropbutton::preRenderDropbutton()
 */
class Dropbutton extends PrerenderBase {

  /**
   * {@inheritdoc}
   */
  public static function preRenderElement(Element $element) {
    $element['#attached']['library'][] = 'bootstrap/dropdown';

    // Enable targeted theming of specific dropbuttons (e.g., 'operations' or
    // 'operations__node').
    if ($subtype = $element->getProperty('subtype')) {
      $element->setProperty('theme', $element->getProperty('theme') . "__$subtype");
    }
  }

}
