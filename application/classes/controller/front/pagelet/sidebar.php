<?php

class Controller_Front_Pagelet_Sidebar extends Controller_Front_Default {
  public function action_search() {}
  public function action_newsposts() {
    $this->template_data['posts'] = Container::factory('doctrine')->createQuery("SELECT p.name AS post_name, p.id AS post_id, pu.name AS user_name, pu.id AS user_id FROM Model_News_Post p LEFT JOIN p.user pu ORDER BY p.time DESC")->setMaxResults(10)->getArrayResult();
  }
  public function action_twitter() {}
}

?>
