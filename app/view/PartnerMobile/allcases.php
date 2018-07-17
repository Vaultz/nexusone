<section class="mobile_only">
  <!-- <?php echo $_SESSION['offer_title'] ?> -->
  <h5>Affaires en cours</h5>

  <div class="current_cases">

    <a href="onecase/ISOLATION/COMB"><div class="card-panel <?php echo $_SESSION['OFFERS'][1]['couleur']; ?>">
      <span class="white-text">N°0000 (ISOLATION Combles)</span>
    </div></a>

    <a href="onecase/BOIS/CHAUDBOIS"><div class="card-panel <?php echo $_SESSION['OFFERS'][4]['couleur']; ?>">
      <span class="white-text">N°0008 (<?php echo $_SESSION['OFFERS'][4]['offre'].' '.$_SESSION['OFFERS'][4]['sous_types'][2]['sous_type'].')' ?></span>
    </div></a>

    <a href="onecase/CET/CETSOLIDARITE"><div class="card-panel <?php echo $_SESSION['OFFERS'][5]['couleur']; ?>">
      <span class="white-text">N°0016 (<?php echo $_SESSION['OFFERS'][5]['offre'].' '.$_SESSION['OFFERS'][5]['sous_types'][1]['sous_type'].')' ?></span>
    </div></a>
  </div>

  <div class="center">
    <!-- <a class="waves-effect waves-light btn button_blue" href="partner_onecase.php?nbphoto_facture=inc">Envoyer</a> -->
  </div>
</section>

<?php include_once(__DIR__."/template/scripts.php"); ?>
