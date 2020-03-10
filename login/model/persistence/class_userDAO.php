<?php

class userDAO extends db {

	public function inserir($user) {

    $query="insert into user (email,password) values ('".$user->getEmail()."','".$user->getPassword()."');";

		$resultat = $this->consulta($query);
		$this->close();

		return $resultat;
	}

	public function modificar($user) {

 	  $query="update user set password = '".$user->getPassword()."' where email = '".$user->getEmail()."';";

    $resultat = $this->consulta($query);
    $this->close();

		return $resultat;
	}
	/*COMPRUEBA QUE EL PASSWORD CORRESPONDA CON EL EMAIL */
	public function validarUserPassword($email,$password) {

		$query="select password from user where email = '".$email."';";
        $consulta = $this->consulta($query);
        $this->close();

        $row = $consulta->fetch_object();

		if (isset($row)) {
            $hashed_password=$row->password;
			/*Compara que los dos hash sean iguales*/
			/*var_dump($password);
			var_dump($hashed_password);
			var_dump(crypt($password, $hashed_password));
			die();*/
            if (hash_equals($hashed_password, crypt($password, $hashed_password))) {
                $ok = true;
			}else{
				$ok = false;
			}
		}
        return $ok;
	}

	/*RETORNA UNA BOOLEANA SI ENCUENTRA O NO UN USUARIO*/
	public function veureUser($email) {
		$query="select * FROM user where email = '".$email."';";

    	$consulta = $this->consulta($query);
		$this->close();

		$row = $consulta->fetch_object();
		
		if (isset($row)) {
			$ok = true;
		}else{
			$ok = false;
		}
        return $ok;
  }

  /*DEVUELVE EL USUARIO*/
  public function retornaUser($email) {

	$query="select * from user where email = '".$email."';";

	$consulta = $this->consulta($query);
	$this->close();

	$row = $consulta->fetch_object();

	if (isset($row)) {
	  $user = new user($row->email,$row->password);
	$user->setId($row->id);

	  return $user;
	}

}
  

}
 ?>
