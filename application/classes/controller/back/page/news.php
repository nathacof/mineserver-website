<?php

class Controller_Back_Page_News extends Controller_Back_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'News';
    return parent::before();
  }

  function action_index() {
    $this->template_data['global']['title']['description'] = 'Overview';
  }
}

?>
