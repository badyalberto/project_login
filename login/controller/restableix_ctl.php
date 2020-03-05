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
            
            $user = $userDAO->retornaUser($_REQUEST['email']);

            if(is_null($user)){
                $msg = "No existeix l'usuari";
            }else{
                $hash = crypt($_REQUEST['password'], null);
                $user = new user($_REQUEST['email'], $hash);
                if($userDAO->modificar($user)){
                    $msg = "Contrassenya modificada correctament";
                }else{
                    $msg = "No s'ha pogut cambiar la contrassenya";
                }
            }
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

