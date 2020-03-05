<?php

class userDAO extends db {

	public function inserir($user) {

    $query="insert into user (email,password) values ('".$user->getEmail()."','".$user->getPassword()."');";

		$resultat = $this->consulta($query);
		$this->close();

		return $resultat;
	}

	/*public function modificar($marca) {

 	  $query="update marca set nom = '".$marca->getNom()."' where id = '".$marca->getId()."';";

    $resultat = $this->consulta($query);
    $this->close();

		return $resultat;
	}

	public function eliminar($id) {

    $query="delete from marca where id = '".$id."';";

    $resultat = $this->consulta($query);
    $this->close();

		return $resultat;
	}*/

	public function validarUserPassword($email,$password) {

		$query="SELECT * FROM user order by id;";
		$consulta = $this->consulta($query);
		$this->close();

		/* construim un array associatiu $usuaris
		amb el format userName => password */
		foreach ($consulta as $row) {
		  $usuaris[$row['email']] = $row['password'];
	  }

		// Si el valor de la casella indexada amb el nom del usuari (la password real)
		// es igual que la password introduïda retorna true, si no false
		if (hash_equals($usuaris[$user], crypt($pwd, $usuaris[$user]))) {
				$ok = true;
		} else {
				$ok = false;
		}
		return $ok;

	}

	/*public function veureMarques() {
		$query="SELECT * FROM marca;";

    $consulta = $this->consulta($query);
		$this->close();

		$arrayMarques = array();
		foreach ($consulta as $row) {
		  $marca = new marca($row["nom"]);
	    $marca->setId($row["id"]);
	    array_push($arrayMarques, $marca);
    }

		return $arrayMarques;
  }*/

}
 ?>
