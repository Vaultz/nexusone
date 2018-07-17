<?php
?>

<section class="mobile_only">
  <?php echo buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], true) ?>

  <h5>Photos de l'existant</h5>
  <div class="card_list">
    <img class="travaux" src="../../../../src/images/bois.jpg" alt="">
    <img class="travaux" src="../../../../src/images/cet.jpg" alt="">
    <img class="travaux" src="../../../../src/images/chaudiere.png" alt="">
    <img class="travaux" src="../../../../src/images/gaz.jpg" alt="">
  </div>

  <div class="center">
    <a class="waves-effect waves-light btn button_blue" <?php echo 'href="../'.$_SESSION['type'].'"'; ?>>Valider</a>
  </div>
</section>

<?php include_once(getcwd()."/app/view/PartnerMobile/Template/scripts.php"); ?>

<script>
  M.toast({html: 'L\'utilisateur est invité à prendre des photos de l\'existant.'});
</script>
