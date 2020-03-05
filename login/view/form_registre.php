<?php
// incloem el header
  include 'header.php';
?>
        <h3>Formulari de Registre</h3>
        <form action="../controller/registre_ctl.php" method='post'>
          <table cellpadding='2' cellspacing='2'>
   				 <tr>
   					 <td>Email:</td>
   					 <td><input type='email' name='email' /></td>
   				 </tr>
           <tr>
             <td>Password</td>
             <td><input type='password' name='password' /></td>
           </tr>
           <tr>
             <td>Repetir password</td>
             <td><input type='password' name='password_r' /></td>
           </tr>
           <tr>
             <td><button class="btn waves-effect waves-light" type="submit" name="action">Enviar
  </button></td>
           </tr>
   			  </table>
        </form>
<?php
  include 'footer.php';
?>
