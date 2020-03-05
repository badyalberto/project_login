<?php

require_once '../config/config.inc.php';
require_once './function_autoload.php';
require_once '../view/printMsg.php';

// incloem el header que mostrarem abans del missatge
require_once '../view/header.php';

$userDAO = new userDAO();

$msg = null;


	  // Si els Valors no estan plens no entrarem
	  if (!empty($_REQUEST['email']) && !empty($_REQUEST['password'])
	      && !empty($_REQUEST['password_r'])) {


	    if($_REQUEST['password'] == $_REQUEST['password_r']) {

	        // Assignem els valors a noves variables
	        $usuari = $_REQUEST['email'];
	        $password = $_REQUEST['password'];

	        // encriptem la contrasenya que hem rebut del formulari
	        $hash = crypt($password, null);

	        $user = new user($usuari, $hash);

	        $userDAO->inserir($user);
	        $msg = "Registre finalitzat correctament";
	    } else {
	        $msg = "ERROR: les contrasenyes han de coincidir";
	    }
	  } else {
	      // Si el formulari no està complert, mostrem avis a l'usuari
	      $msg = "No has introduït tota la informació necessaria";
	  }

if ($msg != null) {
	printMsg($msg);
}

include '../view/footer.php';
?>
