<?php
// incloem el header
  include 'header.php';
?>
<div class="caja-forms">
        <h3>Formulari de Registre</h3>
        <form action="../controller/registre_ctl.php" method='post'>
          <table cellpadding='2' cellspacing='2'>
   				 <tr>
   					 <td style="    border: hidden;
    width: 40%;">Email:</td>
   					 <td style="    border: hidden;
    width: 60%;"><input type='email' name='email' placeholder="Introdueix l'email"/></td>
   				 </tr>
           <tr>
             <td style="    border: hidden;
    width: 40%;">Password</td>
             <td style="    border: hidden;
    width: 60%;"><input type='password' name='password' placeholder="Introdueix la contrassenya"/></td>
           </tr>
           <tr>
             <td style="    border: hidden;
    width: 40%;">Repetir password</td>
             <td style="    border: hidden;
    width: 60%;"><input type='password' name='password_r' placeholder="Repeteix la contraseña"/></td>
           </tr>
           <tr>
             <td style="    border: hidden;"><button class="btn waves-effect waves-light" type="submit" name="action">Enviar
  </button></td>
           </tr>
   			  </table>
        </form>
</div>
<?php
  include 'footer.php';
?>
