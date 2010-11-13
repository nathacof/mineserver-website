<?php

/** @Entity @Table(name="news_category") */
class Model_News_Category {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @Column(type="string") */
  protected $name;
  /** @ManyToMany(targetEntity="Model_News_Post", mappedBy="categories") */
  protected $posts = array();

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_categories() { return $this->categories; }
}

?>
