<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Alter\LibraryInfo.
 */

namespace Drupal\bootstrap\Plugin\Alter;

use Drupal\bootstrap\Annotation\BootstrapAlter;
use Drupal\bootstrap\Bootstrap;
use Drupal\bootstrap\Plugin\PluginBase;
use Drupal\Component\Utility\NestedArray;

/**
 * Implements hook_library_info_alter().
 *
<<<<<<< HEAD
 * @ingroup plugins_alter
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapAlter("library_info")
 */
class LibraryInfo extends PluginBase implements AlterInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(&$libraries, &$extension = NULL, &$context2 = NULL) {
    if ($extension === 'bootstrap') {
      // Retrieve the theme's CDN provider and assets.
      $provider = $this->theme->getProvider();
      $assets = $provider ? $provider->getAssets() : [];

      // Immediately return if there is no provider or assets.
      if (!$provider || !$assets) {
        return;
      }

      // Merge the assets into the library info.
<<<<<<< HEAD
      $libraries['theme'] = NestedArray::mergeDeepArray([$assets, $libraries['theme']], TRUE);
=======
      $libraries['base-theme'] = NestedArray::mergeDeepArray([$assets, $libraries['base-theme']], TRUE);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

      // Add a specific version and theme CSS overrides file.
      // @todo This should be retrieved by the Provider API.
      $version = $this->theme->getSetting('cdn_' . $provider->getPluginId() . '_version') ?: Bootstrap::FRAMEWORK_VERSION;
<<<<<<< HEAD
      $libraries['theme']['version'] = $version;
=======
      $libraries['base-theme']['version'] = $version;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      $provider_theme = $this->theme->getSetting('cdn_' . $provider->getPluginId() . '_theme') ?: 'bootstrap';
      $provider_theme = $provider_theme === 'bootstrap' || $provider_theme === 'bootstrap_theme' ? '' : "-$provider_theme";

      foreach ($this->theme->getAncestry(TRUE) as $ancestor) {
        $overrides = $ancestor->getPath() . "/css/$version/overrides$provider_theme.min.css";
        if (file_exists($overrides)) {
          // Since this uses a relative path to the ancestor from DRUPAL_ROOT,
<<<<<<< HEAD
          // we must prepend the entire path with forward slash (/) so it
          // doesn't prepend the active theme's path.
          $overrides = "/$overrides";

          // The overrides file must also be stored in the "base" category so
          // it isn't added after any potential sub-theme's "theme" category.
          // There's no weight, so it will be added after the provider's assets.
          // @see https://www.drupal.org/node/2770613
          $libraries['theme']['css']['base'][$overrides] = [];
=======
          // we must prefix the entire path with / so it doesn't append the
          // active theme's path (which would duplicate the prefix).
          $libraries['base-theme']['css']['theme']["/$overrides"] = [];
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
          break;
        }
      }
    }
    // Core replacements.
    elseif ($extension === 'core') {
      // Replace core dialog/jQuery UI implementations with Bootstrap Modals.
      if ($this->theme->getSetting('modal_enabled')) {
        $libraries['drupal.dialog']['override'] = 'bootstrap/drupal.dialog';
        $libraries['drupal.dialog.ajax']['override'] = 'bootstrap/drupal.dialog.ajax';
      }
    }
  }

}
