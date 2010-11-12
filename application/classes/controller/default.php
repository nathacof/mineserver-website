<?php

class Controller_Default extends Controller_Template_Twig {
  public function __construct() {
    $this->template_data['global'] = array();
    $this->template_data['global']['title'] = array();
    $this->template_data['global']['assets'] = array('css' => array(), 'js' => array());
  }

  public function before() {
    $session = Container::factory('Session', null, array('name' => 'main'));
    $session->set_timeout(5);

    $this->template_data['global']['assets']['js'][] = 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js';
    $this->template_data['global']['assets']['js'][] = 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js';
    $this->template_data['global']['assets']['js'][] = '/js/loopedslider.js';

    return parent::before();
  }
}

?>
