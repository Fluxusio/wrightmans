<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\Breadcrumb.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
<<<<<<< HEAD
use Drupal\bootstrap\Utility\Variables;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\Core\Template\Attribute;

/**
 * Pre-processes variables for the "breadcrumb" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("breadcrumb")
 */
class Breadcrumb extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessVariables(Variables $variables) {
    $breadcrumb = &$variables['breadcrumb'];

    // Determine if breadcrumbs should be displayed.
    $breadcrumb_visibility = $this->theme->getSetting('breadcrumb');
    if (($breadcrumb_visibility == 0 || ($breadcrumb_visibility == 2 && \Drupal::service('router.admin_context')->isAdminRoute())) || empty($breadcrumb)) {
      $breadcrumb = [];
      return;
    }

=======
  public function preprocess(array &$variables, $hook, array $info) {
    $breadcrumb = &$variables['breadcrumb'];

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = $this->theme->getSetting('breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    if ($this->theme->getSetting('breadcrumb_title') && !empty($breadcrumb)) {
      $request = \Drupal::request();
      $route_match = \Drupal::routeMatch();
      $page_title = \Drupal::service('title_resolver')->getTitle($request, $route_match->getRouteObject());

      if (!empty($page_title)) {
        $breadcrumb[] = [
          'text' => $page_title,
          'attributes' => new Attribute(['class' => ['active']]),
        ];
<<<<<<< HEAD
        // Add cache context based on url.
        $variables->addCacheContexts(['url']);
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      }
    }
  }

}
