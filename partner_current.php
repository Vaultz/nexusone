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
        <img class="travaux" src="images/travaux.png" alt="">
        <img class="travaux" src="images/travaux.png" alt="">
        <img class="travaux" src="images/travaux.png" alt="">
        <img class="travaux" src="images/travaux.png" alt="">
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_newcase.php?nbphoto_existant=inc">Valider</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
