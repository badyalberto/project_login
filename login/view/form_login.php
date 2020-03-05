<?php

// Incloem el header
include 'header.php';
?>

<h3>Pàgina de Login</h3>

<form action="../controller/login_ctl.php" method="post">
        <table cellpadding='2' cellspacing='2'>
   				<tr>
   					<td>Email:</td>
   					<td><input type="email" name="email" placeholder="nom d'usuari" /></td>
                </tr>
                <tr>
   					<td>Password:</td>
   					<td><input type="password" name="password" placeholder="contrassenya" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" /></td>
                </tr>   
        </table>
</form>

<?php
// Incloem el footer
include 'footer.php';
?>
