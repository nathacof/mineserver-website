<?php

/** @Entity @Table(name="auth_group") */
class Model_Auth_Group {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @Column(type="string", length="32") */
  protected $name;
  /** @OneToMany(targetEntity="Model_Auth_Position", mappedBy="group", cascade={"all"}) */
  protected $positions = array();

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_positions() { return $this->positions; }
}

?>
