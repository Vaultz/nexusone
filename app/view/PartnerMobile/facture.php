<?php

?>

<section class="mobile_only">
  <?php echo buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], true) ?>
  <h5>Facture EDF</h5>
  <div class="card_list">
    <img class="factureedf" src="../../../../src/images/factureedf.jpeg" alt="">
  </div>

  <div class="center">
    <a class="waves-effect waves-light btn button_blue" <?php echo 'href="../'.$_SESSION['type'].'"'; ?>>Envoyer</a>
  </div>
</section>

<?php include_once(getcwd()."/app/view/PartnerMobile/Template/scripts.php"); ?> 

<script>
  M.toast({html: 'Ici, l\'utilisateur est invité à prendre une photo de sa facture.'});
</script>
