<?php

namespace Drupal\unicana_redirect\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Class RedirectEditForm.
 *
 * Provides the edit form for our Redirect entity.
 *
 * @package Drupal\unicana_redirect\Form
 *
 * @ingroup unicana_redirect
 */
class RedirectEditForm extends RedirectFormBase {

  /**
   * Returns the actions provided by this form.
   *
   * For the edit form, we only need to change the text of the submit button.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   An associative array containing the current state of the form.
   *
   * @return array
   *   An array of supported actions for the current entity form.
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
    $actions['submit']['#value'] = $this->t('Update Redirect');
    return $actions;
  }

}
