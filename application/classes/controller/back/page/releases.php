<?php

class Controller_Back_Page_Releases extends Controller_Back_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'Releases';
    return parent::before();
  }

  function action_index() {
    $this->template_data['global']['title']['description'] = 'Overview';
  }
}

?>
