<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Alter\PageAttachments.
 */

namespace Drupal\bootstrap\Plugin\Alter;

use Drupal\bootstrap\Annotation\BootstrapAlter;
use Drupal\bootstrap\Plugin\PluginBase;

/**
 * Implements hook_page_attachments_alter().
 *
<<<<<<< HEAD
 * @ingroup plugins_alter
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapAlter("page_attachments")
 */
class PageAttachments extends PluginBase implements AlterInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(&$attachments, &$context1 = NULL, &$context2 = NULL) {
    if ($this->theme->getSetting('popover_enabled')) {
      $attachments['#attached']['library'][] = 'bootstrap/popover';
    }
    if ($this->theme->getSetting('tooltip_enabled')) {
      $attachments['#attached']['library'][] = 'bootstrap/tooltip';
    }
    $attachments['#attached']['drupalSettings']['bootstrap'] = $this->theme->drupalSettings();
  }

}
