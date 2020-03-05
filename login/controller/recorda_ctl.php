<?php

require_once '../config/config.inc.php';
require_once './function_autoload.php';
require_once '../view/printMsg.php';

// incloem el header que mostrarem abans del missatge
require_once '../view/header.php';

$userDAO = new userDAO();

$msg = null;


	  // Si els Valors no estan plens no entrarem
	  if (!empty($_REQUEST['email'])) {

        if($userDAO->veureUser($_REQUEST['email'])) {
	        $url ="http://localhost:120/login/view/form_restablir_contrassenya.php";
            $success = mail($_REQUEST['email'],"Recordar la contrassenya","Per restablir la contrassenya clicar en el link següent:\n".$url);
            if($success){
                $msg = "Correu enviat correctament";
            }else{
                $msg = "No s'ha pogut enviar el correu";
            }
	        
	    } else {
	        $msg = "ERROR: L'usuari no existeix";
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
