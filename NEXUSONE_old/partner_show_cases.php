<?php
include_once(__DIR__."/template/setup.php");
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <!-- <?php echo $_SESSION['offer_title'] ?> -->
      <h5>Affaires en cours</h5>

      <div class="current_cases">
        <a href="#"><div class="card-panel <?php echo $_SESSION['OFFERS'][5]['couleur']; ?>">
          <span class="white-text">0000</span>
        </div></a>
        <a href="#"><div class="card-panel <?php echo $_SESSION['OFFERS'][6]['couleur']; ?>">
          <span class="white-text">0001</span>
        </div></a>
        <a href="#"><div class="card-panel <?php echo $_SESSION['OFFERS'][1]['couleur']; ?>">
          <span class="white-text">0016</span>
        </div></a>
        <a href="#"><div class="card-panel <?php echo $_SESSION['OFFERS'][4]['couleur']; ?>">
          <span class="white-text">0022</span>
        </div></a>
        <a href="#"><div class="card-panel <?php echo $_SESSION['OFFERS'][3]['couleur']; ?>">
          <span class="white-text">0026</span>
        </div></a>
        <div class="card-panel <?php echo $_SESSION['OFFERS'][3]['couleur']; ?>">
          <span class="white-text">0030</span>
        </div>
      </div>

      <div class="center">
        <!-- <a class="waves-effect waves-light btn button_blue" href="partner_newcase.php?nbphoto_facture=inc">Envoyer</a> -->
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script>
      // M.toast({html: 'Ici, l\'utilisateur est invité à prendre une photo de sa facture.'});
    </script>

  </body>
</html>
