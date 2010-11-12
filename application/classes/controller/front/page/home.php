<?php

class Controller_Front_Page_Home extends Controller_Front_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'Home';
    return parent::before();
  }

  public function action_index() {
    $this->template_data['global']['title']['description'] = 'Proudly helping the community punch trees!';
    $this->template_data['global']['assets']['js'][] = '/js/splash.js';
  }
}

?>
