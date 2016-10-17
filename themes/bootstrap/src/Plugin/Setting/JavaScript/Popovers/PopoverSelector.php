<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\JavaScript\Popovers\PopoverSelector.
 */

namespace Drupal\bootstrap\Plugin\Setting\JavaScript\Popovers;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "popover_selector" theme setting.
 *
<<<<<<< HEAD
 * @ingroup plugins_setting
 *
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 * @BootstrapSetting(
 *   id = "popover_selector",
 *   type = "textfield",
 *   title = @Translation("selector"),
 *   description = @Translation("If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added."),
 *   defaultValue = "",
 *   groups = {
 *     "javascript" = @Translation("JavaScript"),
 *     "popovers" = @Translation("Popovers"),
 *     "options" = @Translation("Options"),
 *   },
 *   see = {
 *     "https://github.com/twbs/bootstrap/issues/4215" = @Translation("Issue #4215"),
 *     "http://jsfiddle.net/fScua/" = @Translation("JSFiddle Example"),
 *   },
 * )
 */
class PopoverSelector extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return !!$this->theme->getSetting('popover_enabled');
  }

}
