<?php

/** @Entity @Table(name="news_post") */
class Model_News_Post {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @Column(type="string", length="255") */
  protected $name;
  /** @Column(type="integer") */
  protected $time;
  /** @OneToOne(targetEntity="Model_Auth_User") */
  protected $user;
  /** @OneToMany(targetEntity="Model_News_CategoryInstance", mappedBy="post") */
  protected $categoryinstances = array();
  /** @OneToMany(targetEntity="Model_News_TagInstance", mappedBy="post") */
  protected $taginstances = array();

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_time() { return $this->time; }
  public function set_time($time) { if (is_integer($time)) { $this->time = $time; return true; } return false; }
  public function get_user() { return $this->user; }
  public function set_user($user) { if (is_a('Model_Auth_User', $user)) { $this->user = $user; return true; } return false; }
  public function get_categoryinstances() { return $this->categoryinstances; }
  public function get_taginstances() { return $this->taginstances; }
}

?>
