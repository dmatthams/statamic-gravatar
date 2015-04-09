<?php

class Plugin_gravatar extends Plugin {

  var $meta = array(
    'name'        => 'Gravatar',
    'version'     => '0.1',
    'author'      => 'David Matthams',
    'author_url'  => 'http://dmatthams.co.uk'
  );

  public function index() {
    
    // Parameters
    $email        = $this->fetchParam('email');
    $size         = $this->fetchParam('size', 80);

    $html = '';

    $gravatarHash = md5( strtolower( trim( $email ) ) ); 

    $html .= "http://www.gravatar.com/avatar/".$gravatarHash."?s=".$size."";
        
    return $html;

  }

}
