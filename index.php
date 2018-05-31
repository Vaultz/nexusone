<?php include_once(__DIR__."/template/setup.php");
$_SESSION['user']=null;
$_SESSION['nbphoto_avis']=0;
$_SESSION['nbphoto_facture']=0;
$_SESSION['nbphoto_existant']=0;
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="center">
      <form class="" action="partner.php" method="post">
        <div class="input-field">
          <input id="login" type="text" class="validate">
          <label for="login">Identifiant</label>
        </div>
        <div class="input-field">
          <input id="password" type="password" class="validate">
          <label for="password">Mot de passe</label>
        </div>
        <button id="connectButton" class="btn waves-effect waves-light button_blue" type="submit" name="action">Connexion</button>

      </form>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>
  </body>
</html>
