<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\BootstrapDropdown.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
use Drupal\bootstrap\Utility\Element;
use Drupal\bootstrap\Utility\Unicode;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "bootstrap_dropdown" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("bootstrap_dropdown")
 */
class BootstrapDropdown extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function preprocessVariables(Variables $variables) {
    $this->preprocessLinks($variables);
=======
  protected function preprocessVariables(Variables $variables, $hook, array $info) {
    $this->preprocessLinks($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

    $toggle = Element::create($variables->toggle);
    $toggle->setProperty('split', $variables->split);

    // Convert the items into a proper item list.
    $variables->items = [
      '#theme' => 'item_list__dropdown',
      '#alignment' => $variables->alignment,
      '#items' => $variables->items,
    ];

    // Ensure all attributes are proper objects.
<<<<<<< HEAD
    $this->preprocessAttributes();
=======
    $this->preprocessAttributes($variables, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

  /**
   * Preprocess links in the variables array to convert them from dropbuttons.
   *
   * @param \Drupal\bootstrap\Utility\Variables $variables
   *   A variables object.
<<<<<<< HEAD
   */
  protected function preprocessLinks(Variables $variables) {
=======
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   */
  protected function preprocessLinks(Variables $variables, $hook, array $info) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    // Convert "dropbutton" theme suggestion variables.
    if (Unicode::strpos($variables->theme_hook_original, 'links__dropbutton') !== FALSE && !empty($variables->links)) {
      $operations = !!Unicode::strpos($variables->theme_hook_original, 'operations');

      // Normal dropbutton links are not actually render arrays, convert them.
      foreach ($variables->links as &$link) {
        if (isset($link['title']) && $link['url']) {
          $link = [
            '#type' => 'link',
            '#title' => $link['title'],
            '#url' => $link['url'],
          ];
        }
      }

      // Pop off the first link as the "toggle".
      $variables->toggle = array_shift($variables->links);
      $toggle = Element::create($variables->toggle);

      // Convert any toggle links to a proper button.
      if ($toggle->isType('link')) {
        $toggle->exchangeArray([
          '#type' => 'button',
          '#value' => $toggle->getProperty('title'),
          '#attributes' => [
            'data-url' => $toggle->getProperty('url')->toString(),
          ],
        ]);
        if ($operations) {
          $toggle->setButtonSize('btn-xs');
        }
      }
      // Remove the dropbutton property.
      else {
        $toggle->unsetProperty('dropbutton');
      }

      $variables->items = array_values($variables->links);
      $variables->split = TRUE;
      unset($variables->links);
    }
  }

}
