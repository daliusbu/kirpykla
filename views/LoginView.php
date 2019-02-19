<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.19
 * Time: 08.08
 */

    include (__DIR__. '/../config/env.php');
    require ('templates/head.php');


    ?>

<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
      <td colspan="2" align="center" valign="top"><h3>Kirpyklos darbuotoju sritis</h3></td>
    </tr>
      <?php if(isset($msg)){?>
          <tr>
              <div class="alert alert-danger" role="alert">
                  <?php echo $msg;?>
              </div>
          </tr>
      <?php } ?>
    <tr>
      <td align="right" valign="top">Vardas</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Slaptazodis</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Prisijungti" class="Button3"></td>
    </tr>
  </table>
</form>


