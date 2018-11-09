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
 
    $form['facebook'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Facebook'), 
      '#default_value' => $config->get('SocialLinks.facebook'),
      '#attributes' => array(
        'placeholder' => t('facebook.com/username') 
      ) 
    );

    $form['twitter'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Twitter'), 
      '#default_value' => $config->get('SocialLinks.twitter'),
      '#attributes' => array(
        'placeholder' => t('twitter.com/username') 
      ) 
    );

    $form['gplus'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Google Plus'), 
      '#default_value' => $config->get('SocialLinks.gplus'),
      '#attributes' => array(
        'placeholder' => t('plus.google.com/+username') 
      )  
    );
 
    $form['linkedin'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('LinkedIn'), 
      '#default_value' => $config->get('SocialLinks.linkedin'),
      '#attributes' => array(
        'placeholder' => t('linkedin.com/in/username') 
      )  
    );
 
    $form['youtube'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('YouTube'), 
      '#default_value' => $config->get('SocialLinks.youtube'),
      '#attributes' => array(
        'placeholder' => t('youtube.com/channel/username') 
      )  
    );
 
    $form['instagram'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Instagram'), 
      '#default_value' => $config->get('SocialLinks.instagram'),
      '#attributes' => array(
        'placeholder' => t('instagram.com/username') 
      )  
    );
    
    $form['pinterest'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Pinterest'), 
      '#default_value' => $config->get('SocialLinks.pinterest'),
      '#attributes' => array(
        'placeholder' => t('pinterest.com/username') 
      )  
    );
     
    $form['snapchat'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Snapchat'), 
      '#default_value' => $config->get('SocialLinks.snapchat'),
      '#attributes' => array(
        'placeholder' => t('snapchat.com/add/username') 
      )  
    );

    $form['skype'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Skype'), 
      '#default_value' => $config->get('SocialLinks.skype'),
      '#attributes' => array(
        'placeholder' => t('hatscripts.com/addskype/?username') 
      )  
    );
    
    $form['dribbble'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Dribbble'), 
      '#default_value' => $config->get('SocialLinks.dribbble'),
      '#attributes' => array(
        'placeholder' => t('dribbble.com/username') 
      )  
    );
    
    $form['vimeo'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Vimeo'), 
      '#default_value' => $config->get('SocialLinks.vimeo'),
      '#attributes' => array(
        'placeholder' => t('vimeo.com/username') 
      )  
    );
    
    $form['tumblr'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Tumblr'), 
      '#default_value' => $config->get('SocialLinks.tumblr'),
      '#attributes' => array(
        'placeholder' => t('tumblr.com/blog/username') 
      )  
    );
    
    $form['stumble'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('StumberUpon'), 
      '#default_value' => $config->get('SocialLinks.stumble'),
      '#attributes' => array(
        'placeholder' => t('stumbleupon.com/stumbler/username') 
      )  
    );
    
    $form['flickr'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Flickr'), 
      '#default_value' => $config->get('SocialLinks.flickr'),
      '#attributes' => array(
        'placeholder' => t('flickr.com/people/username') 
      )  
    );
    
    $form['reddit'] = array( 
      '#type' => 'textfield', 
      '#title' => $this->t('Reddit'), 
      '#default_value' => $config->get('SocialLinks.reddit'),
      '#attributes' => array(
        'placeholder' => t('reddit.com/user/username') 
      )  
    );
     

    return $form;
 
  }
 
  /**
 
   * {@inheritdoc}
 
   */
 
  public function submitForm(array &$form, FormStateInterface $form_state) {
 
    $config = $this->config('SocialLinks.settings');
 
    $config->set('SocialLinks.facebook', $form_state->getValue('facebook'));
    $config->set('SocialLinks.twitter', $form_state->getValue('twitter'));
    $config->set('SocialLinks.gplus', $form_state->getValue('gplus'));
    $config->set('SocialLinks.linkedin', $form_state->getValue('linkedin'));
    $config->set('SocialLinks.youtube', $form_state->getValue('youtube'));
    $config->set('SocialLinks.instagram', $form_state->getValue('instagram'));
    $config->set('SocialLinks.pinterest', $form_state->getValue('pinterest'));
    $config->set('SocialLinks.snapchat', $form_state->getValue('snapchat'));
    $config->set('SocialLinks.skype', $form_state->getValue('skype'));
    $config->set('SocialLinks.dribbble', $form_state->getValue('dribbble'));
    $config->set('SocialLinks.vimeo', $form_state->getValue('vimeo'));
    $config->set('SocialLinks.tumblr', $form_state->getValue('tumblr'));
    $config->set('SocialLinks.stumble', $form_state->getValue('stumble'));
    $config->set('SocialLinks.flickr', $form_state->getValue('flickr'));
    $config->set('SocialLinks.reddit', $form_state->getValue('reddit'));
 
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