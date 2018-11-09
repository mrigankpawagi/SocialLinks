<?php
/**
 * @file
 * Contains \Drupal\SocialLinks\Controller\HelloController.
 */
namespace Drupal\SocialLinks\Controller;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class SocialLinksController {
  public function content() {
    $config = $config = \Drupal::config('SocialLinks.settings');
    return array(
      '#type' => 'markup',
      '#markup' => t('




 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 5px;
  border: none;
}

.fa:hover {
  opacity: 0.7;
  border: none;
  color: #fff; 
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

</style><a href="https://www.facebook.com/'.$config->get('SocialLinks.facebook').'" class="fa fa-facebook"></a>
<a href="https://twitter.com/'.$config->get('SocialLinks.twitter').'" class="fa fa-twitter"></a>
<a href="https://plus.google.com/+'.$config->get('SocialLinks.gplus').'" class="fa fa-google"></a>
<a href="https://www.linkedin.com/in/'.$config->get('SocialLinks.linkedin').'" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/channel/'.$config->get('SocialLinks.youtube').'" class="fa fa-youtube"></a>
<a href="https://instagram.com/'.$config->get('SocialLinks.instagram').'" class="fa fa-instagram"></a>
<a href="https://in.pinterest.com/'.$config->get('SocialLinks.pinterest').'" class="fa fa-pinterest"></a>
<a href="https://www.snapchat.com/add/'.$config->get('SocialLinks.snapchat').'" class="fa fa-snapchat-ghost"></a>
<a href="https://hatscripts.com/addskype/?'.$config->get('SocialLinks.skype').'" class="fa fa-skype"></a>

<a href="https://dribbble.com/'.$config->get('SocialLinks.dribbble').'" class="fa fa-dribbble"></a>
<a href="https://vimeo.com/'.$config->get('SocialLinks.vimeo').'" class="fa fa-vimeo"></a>
<a href="https://www.tumblr.com/blog/'.$config->get('SocialLinks.tumblr').'" class="fa fa-tumblr"></a>




<a href="https://www.stumbleupon.com/stumbler/'.$config->get('SocialLinks.stumble').'" class="fa fa-stumbleupon"></a>
<a href="https://www.flickr.com/people/'.$config->get('SocialLinks.flickr').'" class="fa fa-flickr"></a>


<a href="https://www.reddit.com/user/'.$config->get('SocialLinks.reddit').'" class="fa fa-reddit"></a>







'),
    );
  }
}