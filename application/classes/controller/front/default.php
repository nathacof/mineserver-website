<?php

class Controller_Front_Default extends Controller_Default {
  public function before() {
    $this->template_data['global']['assets']['css'][] = '/css/front-main.css';
    return parent::before();
  }
}

?>
