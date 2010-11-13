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
  /** @Column(type="string", length="65535") */
  protected $content;
  /**
  * @ManyToMany(targetEntity="Model_News_Category", inversedBy="posts")
  * @JoinTable(name="news_post_category", joinColumns={@JoinColumn(name="category_id", referencedColumnName="id")}, inverseJoinColumns={@JoinColumn(name="post_id", referencedColumnName="id")})
  */
  protected $categories = array();
  /**
  * @ManyToMany(targetEntity="Model_News_Tag", inversedBy="posts")
  * @JoinTable(name="news_post_tag", joinColumns={@JoinColumn(name="tag_id", referencedColumnName="id")}, inverseJoinColumns={@JoinColumn(name="post_id", referencedColumnName="id")})
  */
  protected $tags = array();

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_time() { return $this->time; }
  public function set_time($time) { if (is_integer($time)) { $this->time = $time; return true; } return false; }
  public function get_user() { return $this->user; }
  public function set_user($user) { if (is_a('Model_Auth_User', $user)) { $this->user = $user; return true; } return false; }
  public function get_content() { return $this->content; }
  public function set_content($content) { if (is_string($content)) { $this->content = $content; return true; } return false; }
  public function get_categories() { return $this->categories; }
  public function get_tags() { return $this->tags; }
}

?>
