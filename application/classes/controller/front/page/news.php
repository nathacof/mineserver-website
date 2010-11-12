<?php

class Controller_Front_Page_News extends Controller_Front_Default {
  public function before() {
    $this->template_data['global']['title']['section'] = 'News';
    return parent::before();
  }

  public function action_index() {
    $this->template_data['global']['title']['description'] = 'Latest';
    $this->template_data['posts'] = Container::factory('doctrine')->createQuery("SELECT p FROM Model_News_Post p ORDER BY p.time DESC")->setMaxResults(10)->getArrayResult();
  }

  public function action_archive() {
    $this->template_data['global']['title']['description'] = 'Archives';
    $this->template_data['posts'] = Container::factory('doctrine')->createQuery("SELECT p FROM Model_News_Post p ORDER BY p.time DESC")->setMaxResults(10)->getArrayResult();
  }

  public function action_article() {
    $this->template_data['global']['title']['description'] = 'Article';
  }
}

?>
