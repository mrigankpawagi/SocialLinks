<?php

namespace Drupal\SocialLinks\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class SocialLinksConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'SocialLinks_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);
    $config = $this->config('SocialLinks.settings');

    $fields = [
      ['facebook', 'Facebook'],
      ['twitter', 'Twitter'],
      ['gplus', 'Google Plus'],
      ['linkedin', 'LinkedIn'],
      ['youtube', 'YouTube'],
      ['instagram', 'Instagram'],
      ['pinterest', 'Pinterest'],
      ['snapchat', 'Snapchat'],
      ['skype', 'Skype'],
      ['dribbble', 'Dribbble'],
      ['vimeo', 'Vimeo'],
      ['tumblr', 'Tumblr'],
      ['stumble', 'StumbleUpon'],
      ['flickr', 'Flickr'],
      ['reddit', 'Reddit'],
    ];

    for ($i = 0; $i < count($fields); $i++) {
      $form[$fields[$i][0]] = [
        '#type' => 'textfield',
        '#title' => $this->t($fields[$i][1]),
        '#default_value' => $config->get('SocialLinks.' . $fields[$i][0]),
        '#attributes' => [
          'placeholder' => $this->t('username'),
        ],
      ];
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config('SocialLinks.settings');

    $fields = [
      'facebook',
      'twitter',
      'gplus',
      'linkedin',
      'youtube',
      'instagram',
      'pinterest',
      'snapchat',
      'skype',
      'dribbble',
      'vimeo',
      'tumblr',
      'stumble',
      'flickr',
      'reddit',
    ];

    for ($i = 0; $i < count($fields); $i++) {
      $config->set('SocialLinks.' . $fields[$i], $form_state->getValue($fields[$i]));
    }

    $config->save();

    return parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'SocialLinks.settings',
    ];
  }

}
