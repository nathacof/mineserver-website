<?php

/** @Entity @Table(name="news_tag") */
class Model_News_TagInstance {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @Column(type="string") */
  protected $name;
  /** @ManyToOne(targetEntity="Model_News_Post", inversedBy="taginstances") */
  protected $post;
  /** @ManyToOne(targetEntity="Model_News_Tag", inversedBy="instances") */
  protected $tag;

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_post() { return $this->post; }
  public function set_post($post) { if (is_a('Model_News_Post', $post)) { $this->post = $post; return true; } return false; }
  public function get_tag() { return $this->tag; }
  public function set_tag($tag) { if (is_a('Model_News_Tag', $tag)) { $this->tag = $tag; return true; } return false; }
}

?>
