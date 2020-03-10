<?php

// Incloem el header
include 'header.php';
require_once '../controller/encriptar_desencriptar.php';

?>
<div class="caja-forms">
<h3>Restableix la contrassenya</h3>
<form action="../controller/restableix_ctl.php" method="post">
        <table cellpadding='2' cellspacing='2'>


   					<input type="hidden" name="email"  value="<?php echo ENC_DES::desencriptar($_GET['email']); ?>"/>
                </tr>
                <tr>
             <td style="    border: hidden;
    width: 40%;">Password</td>
             <td style="    border: hidden;
    width: 60%;"><input type='password' name='password' /></td>
           </tr>
           <tr>
             <td style="    border: hidden;
    width: 40%;">Repetir password</td>
             <td style="    border: hidden;
    width: 60%;"><input type='password' name='password_r' /></td>
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
