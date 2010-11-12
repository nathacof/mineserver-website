<?php

class Controller_Back_Page_Users extends Controller_Back_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'Users';
    return parent::before();
  }

  function action_index() {
    $this->template_data['global']['title']['description'] = 'Overview';
  }
}

?>
