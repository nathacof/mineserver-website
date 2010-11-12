<?php

/** @Entity @Table(name="auth_user") */
class Model_Auth_User {
  /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") */
  protected $id;
  /** @Column(type="string", length="32") */
  protected $name;
  /** @Column(type="string", length="255") */
  protected $mail;
  /** @Column(type="string", length="8") */
  protected $salt;
  /** @Column(type="string", length="32") */
  protected $hash;
  /** @OneToMany(targetEntity="Model_Auth_Position", mappedBy="user", cascade={"all"}) */
  protected $positions = array();

  public function get_id() { return $this->id; }
  public function set_id($id) { if (is_integer($id)) { $this->id = $id; return true; } return false; }
  public function get_name() { return $this->name; }
  public function set_name($name) { if (is_string($name)) { $this->name = $name; return true; } return false; }
  public function get_mail() { return $this->mail; }
  public function set_mail($mail) { if (is_string($mail)) { $this->mail = $mail; return true; } return false; }
  public function get_salt() { return $this->salt; }
  public function set_salt($salt) { if (is_string($salt)) { $this->salt = $salt; return true; } return false; }
  public function get_hash() { return $this->hash; }
  public function set_hash($hash) { if (is_string($hash)) { $this->hash = $hash; return true; } return false; }
  public function get_positions() { return $this->positions; }
}

?>
