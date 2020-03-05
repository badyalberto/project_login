<?php

class user{
    public $id;
    public $email;

    public function __construct($nom,$password){
		$this->setId(null);
        $this->setEmail($nom);
        $this->setPassword($password);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($value){
		$this->email = $value;
    }
    
    public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}

  public function __toString(){
    return $this->getNom();
  }

}
 ?>
