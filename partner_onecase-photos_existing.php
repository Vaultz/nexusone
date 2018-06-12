<?php
include_once(__DIR__."/template/setup.php");
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <?php echo $_SESSION['offer_title'] ?>
      <h5>Photos de l'existant</h5>
      <div class="card_list">
        <img class="travaux" src="images/bois.jpg" alt="">
        <img class="travaux" src="images/cet.jpg" alt="">
        <img class="travaux" src="images/chaudiere.png" alt="">
        <img class="travaux" src="images/gaz.jpg" alt="">
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_onecase.php?nbphoto_existant=inc">Valider</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>
    <script>
      M.toast({html: 'L\'utilisateur est invité à prendre des photos de l\'existant.'});
    </script>

  </body>
</html>
