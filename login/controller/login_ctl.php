<?php

// Incloem la funcio per a comprovar usuaris
require_once './function_autoload.php';

$userDAO = new userDAO();
// Si els Valors no estan plens no entrarem
if (!empty($_REQUEST['email']) && !empty($_REQUEST['password'])) {

    // Assignem els valors a noves variables
    $usuari = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    // Comprovem si user i pass coincideixen
    if ($userDAO->validarUserPassword($usuari, $password)) {

        // Redirigim a l'àrea personal
        header("Location: ../view/loginCorrecte.php");
    } else {

        // Si no coincidissin els valors, redirigirem a 'loginIncorrecte'
        header("Location: ../view/loginIncorrecte.php");
    }
} else {
    // Si el formulari no està complert, redirigirem a missing'
    header("Location: ../view/missing.php");
}
?>
