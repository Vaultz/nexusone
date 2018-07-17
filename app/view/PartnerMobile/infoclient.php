
<section class="mobile_only">
  <?php echo buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], true) ?>
  <h5>Informations client</h5>

   <div class="center">
    <a class="waves-effect waves-light btn button_blue" <?php echo 'href="../'.$_SESSION['type'].'"'; ?>>Valider</a>
  </div>
</section>

<?php include_once(getcwd()."/app/view/PartnerMobile/Template/scripts.php"); ?> 