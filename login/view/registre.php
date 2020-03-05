<?php

// Incloem el header
include 'header.php';
?>

<h3>Registre d'usuari</h3>

<form action="../controller/registre_ctl.php" method="post">
    Email: <input type="email" name="email" /><br />
    Contrassenya: <input type="password" name="password" /><br />
    Repeteix contrassenya <input type="password" name="password_r" /><br />
    <input type="submit" value="Enviar" />
</form>

<?php
// Incloem el footer
include 'footer.php';
?>
