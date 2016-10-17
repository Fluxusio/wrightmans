<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\PreprocessBase.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Plugin\PluginBase;
<<<<<<< HEAD
use Drupal\bootstrap\Utility\Element;
=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
use Drupal\bootstrap\Utility\Variables;
use Drupal\Core\Template\Attribute;

/**
 * Base preprocess class used to build the necessary variables for templates.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class PreprocessBase extends PluginBase implements PreprocessInterface {

  /**
<<<<<<< HEAD
   * The theme hook invoked.
   *
   * @type string
   */
  protected $hook;

  /**
   * The theme hook info array from the theme registry.
   *
   * @type array
   */
  protected $info;

  /**
   * The Variables object.
   *
   * @type \Drupal\bootstrap\Utility\Variables
   */
  protected $variables;

  /**
   * {@inheritdoc}
   */
  public function preprocess(array &$variables, $hook, array $info) {
    $this->hook = $hook;
    $this->info = $info;
    $this->variables = Variables::create($variables);
    if ($this->variables->element) {
      $this->preprocessElement($this->variables->element, $this->variables);
    }
    $this->preprocessVariables($this->variables);
=======
   * {@inheritdoc}
   */
  public function preprocess(array &$variables, $hook, array $info) {
    $vars = Variables::create($variables);
    if ($vars->element) {
      $this->preprocessElement($vars, $hook, $info);
    }
    $this->preprocessVariables($vars, $hook, $info);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

  /**
   * Ensures all attributes have been converted to an Attribute object.
<<<<<<< HEAD
   */
  protected function preprocessAttributes() {
    foreach ($this->variables as $name => $value) {
      if (strpos($name, 'attributes') !== FALSE && is_array($value)) {
        $this->variables[$name] = new Attribute($value);
=======
   *
   * @param \Drupal\bootstrap\Utility\Variables $variables
   *   A variables object.
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   */
  protected function preprocessAttributes(Variables $variables, $hook, array $info) {
    foreach ($variables as $name => $value) {
      if (strpos($name, 'attributes') !== FALSE && is_array($value)) {
        $variables[$name] = new Attribute($value);
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      }
    }
  }

  /**
   * Converts any set description variable into a traversable array.
   *
<<<<<<< HEAD
   * @see https://www.drupal.org/node/2324025
   */
  protected function preprocessDescription() {
    if ($this->variables->offsetGet('description')) {
      // Retrieve the description attributes.
      $description_attributes = $this->variables->offsetGet('description_attributes', []);

      // Remove standalone description attributes.
      $this->variables->offsetUnset('description_attributes');

      // Build the description attributes.
      if ($id = $this->variables->getAttribute('id')) {
        $this->variables->setAttribute('aria-describedby', "$id--description");
=======
   * @param \Drupal\bootstrap\Utility\Variables $variables
   *   A variables object.
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   *
   * @see https://www.drupal.org/node/2324025
   */
  protected function preprocessDescription(Variables $variables, $hook, array $info) {
    if ($variables->offsetGet('description')) {
      // Retrieve the description attributes.
      $description_attributes = $variables->offsetGet('description_attributes', []);

      // Remove standalone description attributes.
      $variables->offsetUnset('description_attributes');

      // Build the description attributes.
      if ($id = $variables->getAttribute('id')) {
        $variables->setAttribute('aria-describedby', "$id--description");
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
        $description_attributes['id'] = "$id--description";
      }

      // Replace the description variable.
<<<<<<< HEAD
      $this->variables->offsetSet('description', [
        'attributes' => new Attribute($description_attributes),
        'content' => $this->variables['description'],
        'position' => $this->variables->offsetGet('description_display', 'after'),
=======
      $variables->offsetSet('description', [
        'attributes' => new Attribute($description_attributes),
        'content' => $variables['description'],
        'position' => $variables->offsetGet('description_display', 'after'),
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      ]);
    }
  }

  /**
   * Preprocess the variables array if an element is present.
   *
<<<<<<< HEAD
   * @param \Drupal\bootstrap\Utility\Element $element
   *   The Element object.
   * @param \Drupal\bootstrap\Utility\Variables $variables
   *   The Variables object.
   */
  protected function preprocessElement(Element $element, Variables $variables) {}
=======
   * @param \Drupal\bootstrap\Utility\Variables $variables
   *   A variables object.
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   */
  protected function preprocessElement(Variables $variables, $hook, array $info) {}
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

  /**
   * Preprocess the variables array.
   *
   * @param \Drupal\bootstrap\Utility\Variables $variables
<<<<<<< HEAD
   *   The Variables object.
   */
  protected function preprocessVariables(Variables $variables) {}
=======
   *   A variables object.
   * @param string $hook
   *   The name of the theme hook.
   * @param array $info
   *   The theme hook info array.
   */
  protected function preprocessVariables(Variables $variables, $hook, array $info) {}
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

}
