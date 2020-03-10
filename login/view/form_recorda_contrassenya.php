<?php

// Incloem el header
include 'header.php';
?>
<div style="caja-forms">
<h3>Recordar contraseña</h3>

<form action="../controller/recorda_ctl.php" method="post">
        <table cellpadding='2' cellspacing='2'>
   				<tr>
   					<td style="    border: hidden;
    width: 40%;">Email:</td>
   					<td style="    border: hidden;
    width: 60%;"><input type="email" name="email" placeholder="Introdueix l' email" /></td>
                </tr>
                <tr>
                    <td style="    border: hidden;"><button class="btn waves-effect waves-light" type="submit" name="action">Enviar
  </button></td>
                </tr>   
        </table>
</form>
</div>
<?php
// Incloem el footer
include 'footer.php';
?>
