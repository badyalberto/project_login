<?php

// Incloem el header
include 'header.php';
?>
<div style="padding: 3%;
box-shadow: 3px 3px 5px 6px
#ccc;
width: 50%;
margin: 0 auto;
    margin-top: 0px;
    margin-bottom: 0px;
margin-top: 2%;
margin-bottom: 2%;">
<h3>Pàgina de Login</h3>

<form action="../controller/login_ctl.php" method="post">
        <table cellpadding='2' cellspacing='2'>
   				<tr>
   					<td>Email:</td>
   					<td><input type="email" name="email" placeholder="Introdueix l'email" /></td>
                </tr>
                <tr>
   					<td>Password:</td>
   					<td><input type="password" name="password" id="password" placeholder="contrassenya" /></td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" class="filled-in" id="check" onclick="ocultaPassword()" />
                            <span>Mostrar contrassenya</span>
                        </label>
                    </td>
                </tr>
                <tr>
   					<td><a href="form_recorda_contrassenya.php">No recordes la contrassenya ?</a></td>
                </tr>
                <tr>
                    <td><button class="btn waves-effect waves-light" type="submit" name="action">Enviar
  </button></td>
                </tr>   
        </table>
</form>
</div>
<?php
// Incloem el footer
include 'footer.php';
?>
