<?php

require_once '../config/config.inc.php';
require_once './function_autoload.php';
require_once '../view/printMsg.php';
require_once './encriptar_desencriptar.php';

// incloem el header que mostrarem abans del missatge
require_once '../view/header.php';

$userDAO = new userDAO();

$msg = null;


	  // COMPROBA SI EL EMAIL NO ESTA BUIT
	  if (!empty($_REQUEST['email'])) {
		  //COMPROBA QUE EL EMAIL ESTIGUE EN A BBDD
        if($userDAO->veureUser($_REQUEST['email'])) {
			//ENCRIPTA EL EMAIL PER ENVIARLO PER GET
			
			$email = ENC_DES::encriptar($_REQUEST['email']);
			if($email != false){
				$url ="http://localhost:120/login/view/form_restablir_contrassenya.php?email=".$email;
				$subject = "Recordar la contrassenya";
				$headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=iso-8859-1';
				$message = '
								<html>
								<head>
								<title>Recordar la contrassenya</title>
								</head>
								<body>
								<p>Click en l\'enllaç de sota per restablir la teva contrassenya:</p>
								"<a href='.$url.'>Restablir la contrassenya</a>"
								</body>
								</html>
								';

				//implode une los elementos de la array cuando encuentra un \r o \n
				$success = mail($_REQUEST['email'],$subject,$message,implode("\r\n", $headers));
				if($success){
					$msg = "Correu enviat correctament";
				}else{
					$msg = "No s'ha pogut enviar el correu";
				}
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
