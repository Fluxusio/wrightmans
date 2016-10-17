<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Annotation\PluginCallback.
 */

namespace Drupal\bootstrap\Annotation;

use Drupal\bootstrap\Bootstrap;
use Drupal\Component\Annotation\AnnotationInterface;
use Drupal\Component\Annotation\PluginID;

/**
 * Defines a Plugin annotation object that just contains an ID.
 *
 * @Annotation
<<<<<<< HEAD
 *
 * @ingroup utility
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class PluginCallback extends PluginID {

  /**
   * The plugin ID.
   *
   * When an annotation is given no key, 'value' is assumed by Doctrine.
   *
   * @var string
   */
  public $value;

  /**
   * Flag that determines how to add the plugin to a callback array.
   *
   * Must be one of the following constants:
   *   - \Drupal\bootstrap\Bootstrap::CALLBACK_APPEND
   *   - \Drupal\bootstrap\Bootstrap::CALLBACK_PREPEND
   *   - \Drupal\bootstrap\Bootstrap::CALLBACK_REPLACE_APPEND
   *   - \Drupal\bootstrap\Bootstrap::CALLBACK_REPLACE_PREPEND
   * Use with @ BootstrapConstant annotation.
   *
   * @see \Drupal\bootstrap\Bootstrap::addCallback()
   *
   * @var \Drupal\bootstrap\Annotation\BootstrapConstant
   */
  public $action = Bootstrap::CALLBACK_APPEND;

  /**
   * A callback to replace.
   *
   * @var string
   */
  public $replace = FALSE;

  /**
   * {@inheritdoc}
   */
  public function get() {
    $definition = parent::get();
    $parent_properties = array_keys($definition);
    $parent_properties[] = 'value';

    // Merge in the defined properties.
    $reflection = new \ReflectionClass($this);
    foreach ($reflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
      $name = $property->getName();
      if (in_array($name, $parent_properties)) {
        continue;
      }
      $value = $property->getValue($this);
      if ($value instanceof AnnotationInterface) {
        $value = $value->get();
      }
      $definition[$name] = $value;
    }

    return $definition;
  }

}
