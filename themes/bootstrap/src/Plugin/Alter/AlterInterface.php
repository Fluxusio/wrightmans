<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Alter\AlterInterface.
 */

namespace Drupal\bootstrap\Plugin\Alter;

/**
 * Defines the interface for an object oriented alter.
<<<<<<< HEAD
 *
 * @ingroup plugins_alter
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
interface AlterInterface {

  /**
   * Alters data for a specific hook_TYPE_alter() implementation.
   *
   * @param mixed $data
   *   The variable that will be passed to hook_TYPE_alter() implementations to
   *   be altered. The type of this variable depends on the value of the $type
   *   argument. For example, when altering a 'form', $data will be a structured
   *   array. When altering a 'profile', $data will be an object.
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference. If more
   *   context needs to be provided to implementations, then this should be an
   *   associative array as described above.
   */
  public function alter(&$data, &$context1 = NULL, &$context2 = NULL);

}
