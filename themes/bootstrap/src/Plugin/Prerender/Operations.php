<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Prerender\Operations.
 */

namespace Drupal\bootstrap\Plugin\Prerender;

use Drupal\bootstrap\Annotation\BootstrapPrerender;

/**
<<<<<<< HEAD
 * Pre-render callback for the "operations" element type.
 *
 * @ingroup plugins_prerender
=======
 * Defines the interface for an object oriented preprocess plugin.
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPrerender("operations",
 *   replace = "Drupal\Core\Render\Element\Operations::preRenderDropbutton"
 * )
 *
 * @see \Drupal\bootstrap\Plugin\Prerender\Dropbutton
 * @see \Drupal\Core\Render\Element\Operations::preRenderDropbutton()
 */
class Operations extends Dropbutton {}
