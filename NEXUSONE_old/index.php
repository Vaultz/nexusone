<?php include_once(__DIR__."/template/setup.php");
session_destroy();
$_SESSION['user']=null;
$_SESSION['nbphoto_avis']=0;
$_SESSION['nbphoto_facture']=0;
$_SESSION['nbphoto_existant']=0;
$_SESSION['offer']=null;
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="center">
      <div class="desktop_only card-panel blue">
        <span class="white-text">Sur Firefox, appuyer sur Shift+Ctrl+M pour passer en mode mobile.
        </span>
      </div>
      <a href="partner_offers.php" id="connect_partner_button" class="mobile_only btn waves-effect waves-light button_blue">Module Partenaire Mobile</a>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
