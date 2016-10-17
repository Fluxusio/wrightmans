<?php
<<<<<<< HEAD

namespace Drupal\admin_toolbar_tools\Controller;

use Drupal\Core\Cache\CacheBackendInterface;
=======
/**
 * @file
 * Contains \Drupal\admin_toolbar_tools\Controller\ToolbarController.
 *
 */

namespace Drupal\admin_toolbar_tools\Controller;

//Use the necessary classes
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\CronInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
<<<<<<< HEAD
use Drupal\Core\Menu\ContextualLinkManager;
use Drupal\Core\Menu\LocalActionManager;
use Drupal\Core\Menu\LocalTaskManager;
use Drupal\Core\Menu\MenuLinkManager;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

/**
 * Class ToolbarController
 * @package Drupal\admin_toolbar_tools\Controller
 */
class ToolbarController extends ControllerBase {
<<<<<<< HEAD

  /**
   * The cron service.
   *
   * @var $cron \Drupal\Core\CronInterface
   */
  protected $cron;
  protected $menuLinkManager;
  protected $contextualLinkManager;
  protected $localTaskLinkManager;
  protected $localActionLinkManager;
  protected $cacheRender;

=======
  /**
   * The cron service.
   *
   * @var \Drupal\Core\CronInterface
   */
  protected $cron;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  /**
   * Constructs a CronController object.
   *
   * @param \Drupal\Core\CronInterface $cron
   *   The cron service.
   */
<<<<<<< HEAD
  public function __construct(CronInterface $cron,
                              MenuLinkManager $menuLinkManager,
                              ContextualLinkManager $contextualLinkManager,
                              LocalTaskManager $localTaskLinkManager,
                              LocalActionManager $localActionLinkManager,
                              CacheBackendInterface $cacheRender) {
    $this->cron = $cron;
    $this->menuLinkManager = $menuLinkManager;
    $this->contextualLinkManager = $contextualLinkManager;
    $this->localTaskLinkManager = $localTaskLinkManager;
    $this->localActionLinkManager = $localActionLinkManager;
    $this->cacheRender = $cacheRender;
=======
  public function __construct(CronInterface $cron) {
    $this->cron = $cron;
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
<<<<<<< HEAD
    return new static(
      $container->get('cron'),
      $container->get('plugin.manager.menu.link'),
      $container->get('plugin.manager.menu.contextual_link'),
      $container->get('plugin.manager.menu.local_task'),
      $container->get('plugin.manager.menu.local_action'),
      $container->get('cache.render')
    );
  }

  // Reload the previous page.
  public function reload_page() {
    $request = \Drupal::request();
    if($request->server->get('HTTP_REFERER')) {
      return $request->server->get('HTTP_REFERER');
    }
    else{
      return '/';
    }
  }

  // Flushes all caches.
  public function flushAll() {
    drupal_flush_all_caches();
    drupal_set_message($this->t('All caches cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  // Flushes css and javascript caches.
=======
    return new static($container->get('cron'));
  }
  //Reload the previous page.
  public function reload_page() {
    $request = \Drupal::request();
    return $request->server->get('HTTP_REFERER');
  }

  //Flush all caches.
  public function flushAll() {
    drupal_flush_all_caches();
    drupal_set_message($this->t('All cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  //This function flush css and javascript caches.
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  public function flush_js_css() {
    \Drupal::state()
      ->set('system.css_js_query_string', base_convert(REQUEST_TIME, 10, 36));
    drupal_set_message($this->t('CSS and JavaScript cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

<<<<<<< HEAD
  // Flushes plugins caches.
  public function flush_plugins() {
    \Drupal::service('plugin.cache_clearer')->clearCachedDefinitions();
    drupal_set_message($this->t('Plugins cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  // Resets all static caches.
  public function flush_static() {
    drupal_static_reset();
    drupal_set_message($this->t('Static cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  // Clears all cached menu data.
  public function flush_menu() {
    menu_cache_clear_all();
    $this->menuLinkManager->rebuild();
    $this->contextualLinkManager->clearCachedDefinitions();
    $this->localTaskLinkManager->clearCachedDefinitions();
    $this->localActionLinkManager->clearCachedDefinitions();
    drupal_set_message($this->t('Routing and links cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  // Links to drupal.org home page.
=======
  //This function flush plugins caches.
  public function flush_plugins() {
    // Clear all plugin caches.
    \Drupal::service('plugin.cache_clearer')->clearCachedDefinitions();
    drupal_set_message($this->t('Plugin cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

  // Reset all static caches.
  public function flush_static() {
    drupal_static_reset();
    drupal_set_message($this->t('All static caches cleared.'));
    return new RedirectResponse($this->reload_page());
  }

// Clears all cached menu data.
  public function flush_menu() {
    menu_cache_clear_all();
    drupal_set_message($this->t('All cached menu data cleared.'));
    return new RedirectResponse($this->reload_page());
  }

// this function allow to access in documentation via admin_toolbar module
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  public function drupal_org() {
    $response = new RedirectResponse("https://www.drupal.org");
    $response->send();
    return $response;
  }

<<<<<<< HEAD
  // Displays the administration link Development.
=======
  //This function display the administration link Development
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  public function development() {
    return new RedirectResponse('/admin/structure/menu/');
  }

<<<<<<< HEAD
  // Access to Drupal 8 changes (list changes of the different versions of drupal core).
=======
  // this function allow to access in documentation(list changes of the different versions of drupal core) via admin_toolbar module.
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  public function list_changes() {
    $response = new RedirectResponse("https://www.drupal.org/list-changes");
    $response->send();
    return $response;
  }

<<<<<<< HEAD
  // Adds a link to the Drupal 8 documentation.
=======
  //this function allow to add
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  public function documentation() {
    $response = new RedirectResponse("https://api.drupal.org/api/drupal/8");
    $response->send();
    return $response;
  }

  public function runCron() {
    $this->cron->run();
    drupal_set_message($this->t('Cron ran successfully.'));
    return new RedirectResponse($this->reload_page());
  }

<<<<<<< HEAD
  public function cacheRender() {
    $this->cacheRender->invalidateAll();
    drupal_set_message($this->t('Render cache cleared.'));
    return new RedirectResponse($this->reload_page());
  }

}
=======

}
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
