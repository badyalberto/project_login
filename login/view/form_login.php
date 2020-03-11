<?php

// Incloem el header
include 'header.php';
?>
<div class="caja-forms">
<h3>Pàgina de Login</h3>

<form action="../controller/login_ctl.php" method="post">
        <table cellpadding='2' cellspacing='2' style="border: hidden;">
   				<tr>
   					<td style="    border: hidden;
    width: 40%;">Email:</td>
   					<td style="    border: hidden;
    width: 60%;"><input type="email" name="email" placeholder="Introdueix l'email" /></td>
                </tr>
                <tr>
   					<td style="    border: hidden;
    width: 40%;">Password:</td>
   					<td style="    border: hidden;
    width: 60%;"><input type="password" name="password" id="password" placeholder="contrassenya" /></td>
                </tr>
                <tr style="border:hidden;">
                    <td>
                        <label>
                            <input type="checkbox" class="filled-in" id="check" onclick="ocultaPassword()" />
                            <span>Mostrar contrassenya</span>
                        </label>
                    </td>
                </tr>
                <tr style="border:hidden;">
   					<td><a href="form_recorda_contrassenya.php">No recordes la contrassenya ?</a></td>
                </tr>
                <tr style="border:hidden;">
                    <td><button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button></td>
                </tr>   
        </table>
</form>
</div>
</body>
<?php
// Incloem el footer
include 'footer.php';
?>
