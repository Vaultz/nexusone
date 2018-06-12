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
      <h5>Facture EDF</h5>
      <div class="card_list">
        <img class="factureedf" src="images/factureedf.jpeg" alt="">
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_onecase.php?nbphoto_facture=inc">Envoyer</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script>
      M.toast({html: 'Ici, l\'utilisateur est invité à prendre une photo de sa facture.'});
    </script>

  </body>
</html>
