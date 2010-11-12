<?php

/** @Entity @Table(name="News_Categoryinstance") */
class Model_News_CategoryInstance {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @ManyToOne(targetEntity="Model_News_Post", inversedBy="categoryinstances") */
  protected $post;
  /** @ManyToOne(targetEntity="Model_News_Category", inversedBy="categoryinstances") */
  protected $category;

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_post() { return $this->post; }
  public function set_post($post) { if (is_a('Model_News_Post', $post)) { $this->post = $post; return true; } return false; }
  public function get_category() { return $this->category; }
  public function set_category($category) { if (is_a('Model_News_Category', $category)) { $this->category = $category; return true; } return false; }
}

?>
