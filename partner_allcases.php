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

        <a href="partner_onecase.php?offer=<?php echo $_SESSION['OFFERS'][1]['offre'] ?>&type=<?php echo $_SESSION['OFFERS'][1]['sous_types'][1]['lien'] ?>&nbphoto_facture=inc&nbphoto_domic=inc&nbphoto_existant=inc"><div class="card-panel <?php echo $_SESSION['OFFERS'][1]['couleur']; ?>">
          <span class="white-text">N°0000 (<?php echo $_SESSION['OFFERS'][1]['offre'].' '.$_SESSION['OFFERS'][1]['sous_types'][1]['sous_type'].')' ?></span>
        </div></a>

        <a href="partner_onecase.php?offer=<?php echo $_SESSION['OFFERS'][4]['offre'] ?>&type=<?php echo $_SESSION['OFFERS'][4]['sous_types'][2]['lien'] ?>&nbphoto_facture=inc&nbphoto_domic=inc&nbphoto_existant=inc"><div class="card-panel <?php echo $_SESSION['OFFERS'][4]['couleur']; ?>">
          <span class="white-text">N°0008 (<?php echo $_SESSION['OFFERS'][4]['offre'].' '.$_SESSION['OFFERS'][4]['sous_types'][2]['sous_type'].')' ?></span>
        </div></a>

        <a href="partner_onecase.php?offer=<?php echo $_SESSION['OFFERS'][5]['offre'] ?>&type=<?php echo $_SESSION['OFFERS'][5]['sous_types'][1]['lien'] ?>&nbphoto_facture=inc&nbphoto_domic=inc&nbphoto_existant=inc"><div class="card-panel <?php echo $_SESSION['OFFERS'][5]['couleur']; ?>">
          <span class="white-text">N°0016 (<?php echo $_SESSION['OFFERS'][5]['offre'].' '.$_SESSION['OFFERS'][5]['sous_types'][1]['sous_type'].')' ?></span>
        </div></a>
      </div>

      <div class="center">
        <!-- <a class="waves-effect waves-light btn button_blue" href="partner_onecase.php?nbphoto_facture=inc">Envoyer</a> -->
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script>
      // M.toast({html: 'Ici, l\'utilisateur est invité à prendre une photo de sa facture.'});
    </script>

  </body>
</html>
