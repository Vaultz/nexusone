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
      <h5>Les données extraites sont-elles correctes ?</h5>
      <div class="card_list">
        <form class="clientdata" action="#">
          <label class="active" for="nom">Nom</label>
          <input value="Dubois" id="nom" type="text" class="validate">

          <label class="active" for="prenom">Prénom</label>
          <input value="Pierre" id="prenom" type="text" class="validate">

          <label class="active" for="rue">Rue</label>
          <input value="32 avenue Pablo Picasso" id="rue" type="text" class="validate">

          <label class="active" for="postal">Code Postal</label>
          <input value="92000" id="postal" type="text" class="validate">

          <label class="active" for="ville">Ville</label>
          <input value="Nanterre" id="ville" type="text" class="validate">

          <label class="active" for="test">...</label>
          <input value="..." id="test" type="text" class="validate">
        </form>
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_newcase.php?nbphoto_facture=inc">Valider</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
