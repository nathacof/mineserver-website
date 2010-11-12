<?php

/** @Entity @Table(name="auth_position") */
class Model_Auth_Position {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @ManyToOne(targetEntity="Model_Auth_User", inversedBy="positions") */
  protected $user;
  /** @ManyToOne(targetEntity="Model_Auth_Group", inversedBy="positions") */
  protected $group;

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_user() { return $this->user; }
  public function set_user($user) { if (is_a($user, 'Model_Auth_User')) { $this->user = $user; return true; } return false; }
  public function get_group() { return $this->group; }
  public function set_group($group) { if (is_a($group, 'Model_Auth_Group')) { $this->group = $group; return true; } return false; }
}

?>
