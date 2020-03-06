<?php
// incloem el header
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
</div>
<?php
  include 'footer.php';
?>
