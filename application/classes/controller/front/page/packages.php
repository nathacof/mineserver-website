<?php

class Controller_Front_Page_Packages extends Controller_Front_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'Packages';
    return parent::before();
  }

  public function action_index() {
    $this->template_data['global']['title']['description'] = 'Overview';
  }
}

?>
