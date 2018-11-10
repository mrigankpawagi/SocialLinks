<?php
 
/**
 * @file
 * Contains \Drupal\SocialLinks\Form\SocialLinksConfigForm.
 */
 
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
      ['facebook', 'Facebook', 'facebook.com/username'],
      ['twitter', 'Twitter', 'twitter.com/username'],
      ['gplus', 'Google Plus', 'plus.google.com/+username'],
      ['linkedin', 'LinkedIn', 'linkedin.com/in/username'],
      ['youtube', 'YouTube', 'youtube.com/channel/username'],
      ['instagram', 'Instagram', 'instagram.com/username'],
      ['pinterest', 'Pinterest', 'pinterest.com/username'],
      ['snapchat', 'Snapchat', 'snapchat.com/add/username'],
      ['skype', 'Skype', 'hatscripts.com/addskype/?username'],
      ['dribbble', 'Dribbble', 'dribbble.com/username'],
      ['vimeo', 'Vimeo', 'vimeo.com/username'],
      ['tumblr', 'Tumblr', 'tumblr.com/blog/username'],
      ['stumble', 'StumbleUpon', 'stumbleupon.com/stumbler/username'],
      ['flickr', 'Flickr', 'flickr.com/people/username'],
      ['reddit', 'Reddit', 'reddit.com/user/username'],
    ];

    for($i = 0; $i < sizeof($fields); $i ++) {
      $form[$fields[$i][0]] = [
        '#type' => 'textfield',
        '#title' => $this->t($fields[$i][1]),
        '#default_value' => $config->get('SocialLinks.' . $fields[$i][0]),
        '#attributes' => [
          'placeholder' => $this->t($fields[$i][2]),
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

    for($i = 0; $i < sizeof($fields); $i ++) {
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
