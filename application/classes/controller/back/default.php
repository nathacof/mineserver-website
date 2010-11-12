<?php

class Controller_Back_Default extends Controller_Default {
  public function before() {
    $this->template_data['global']['assets']['css'][] = '/css/back-main.css';
    return parent::before();
  }
}

?>
