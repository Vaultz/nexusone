<?php
?>


<section class="mobile_only">
  <?php echo buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], true) ?>

  <h5>Domicile & Revenu</h5>

  <div class="card_list">
      <select>
        <option value="" disabled selected>Choisissez votre document</option>
        <option value="1">Avis d'imposition</option>
        <option value="2">Acte notarié</option>
        <option value="3">Etc.</option>
      </select>
    </div>

      <div class="input-field col s12 center">
    <img class="document" src="../../../../src/images/avis.jpeg" alt="">
  </div>

  <div class="center">
    <a class="waves-effect waves-light btn button_blue" <?php echo 'href="../'.$_SESSION['type'].'"'; ?>>Valider</a>
  </div>
</section>

<?php include_once(getcwd()."/app/view/PartnerMobile/Template/scripts.php"); ?> 

<script>
  M.toast({html: 'L\'utilisateur est invité à prendre une photo de son document.'})
</script>

