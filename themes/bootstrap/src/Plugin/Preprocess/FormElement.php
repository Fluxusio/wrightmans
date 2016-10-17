<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Preprocess\FormElement.
 */

namespace Drupal\bootstrap\Plugin\Preprocess;

use Drupal\bootstrap\Annotation\BootstrapPreprocess;
use Drupal\bootstrap\Utility\Element;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "form_element" theme hook.
 *
<<<<<<< HEAD
 * @ingroup plugins_preprocess
=======
 * @ingroup theme_preprocess
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 *
 * @BootstrapPreprocess("form_element")
 */
class FormElement extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function preprocessElement(Element $element, Variables $variables) {
    // Set errors flag.
    $variables['errors'] = $element->hasProperty('has_error');

    if ($element->getProperty('autocomplete_route_name')) {
=======
  public function preprocessElement(Variables $variables, $hook, array $info) {
    // Set errors flag.
    $variables['errors'] = $variables->element->hasProperty('has_error');

    if ($variables->element->getProperty('autocomplete_route_name')) {
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      $variables['is_autocomplete'] = TRUE;
    }

    // See http://getbootstrap.com/css/#forms-controls.
<<<<<<< HEAD
    $checkbox = $variables['is_checkbox'] = $element->isType('checkbox');
    $radio = $variables['is_radio'] = $element->isType('radio');

    // Determine if the form element should have the "form-group" class added.
    // Use an explicitly set property from the element or use its other
    // properties as the criteria to determine if it should be set.
    $variables['is_form_group'] = $element->getProperty('form_group', !$variables['is_checkbox'] && !$variables['is_radio'] && !$element->isType(['hidden', 'textarea']));

    // Add label_display and label variables to template.
    $display = $variables['label_display'] = $variables['title_display'] = $element->getProperty('title_display');
=======
    $checkbox = $variables['is_checkbox'] = $variables->element->isType('checkbox');
    $radio = $variables['is_radio'] = $variables->element->isType('radio');
    $variables['is_form_group'] = !$variables['is_checkbox'] && !$variables['is_radio'] && !$variables->element->isType(['hidden', 'textarea']);

    // Add label_display and label variables to template.
    $display = $variables['label_display'] = $variables['title_display'] = $variables->element->getProperty('title_display');
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966

    // Place single checkboxes and radios in the label field.
    if (($checkbox || $radio) && $display !== 'none' && $display !== 'invisible') {
      $label = Element::create($variables['label']);
      $children = &$label->getProperty('children', '');
      $children .= $variables['children'];
      unset($variables['children']);

      // Pass the label attributes to the label, if available.
<<<<<<< HEAD
      if ($element->hasProperty('label_attributes')) {
        $label->setAttributes($element->getProperty('label_attributes'));
=======
      if ($variables->element->hasProperty('label_attributes')) {
        $label->setAttributes($variables->element->getProperty('label_attributes'));
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
      }
    }

    // Remove the #field_prefix and #field_suffix values set in
<<<<<<< HEAD
    // template_preprocess_form_element(). These are handled at the input level.
    // @see \Drupal\bootstrap\Plugin\Preprocess\Input::preprocess().
    unset($variables['prefix']);
    unset($variables['suffix']);
=======
    // template_preprocess_form_element(). These are handled on the input level.
    // @see \Drupal\bootstrap\Plugin\Preprocess\Input::preprocess().
    if ($variables->element->hasProperty('input_group') || $variables->element->hasProperty('input_group_button')) {
      $variables['prefix'] = FALSE;
      $variables['suffix'] = FALSE;
    }

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }

}
