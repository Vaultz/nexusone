<?php
include_once(__DIR__."/template/setup.php");
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <h4>Préparer une affaire</h4>
      <h5>Facture EDF</h5>
      <div class="card_list">
        <img class="factureedf" src="images/factureedf.jpeg" alt="">
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_facture_ocr.php">OCR</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
