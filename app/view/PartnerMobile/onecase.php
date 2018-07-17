<?php

if (isset($_GET['offer'])) $_SESSION['offer']=$_GET['offer'];
if (isset($_GET['type'])) $_SESSION['type']=$_GET['type'];


?>

<section class="mobile_only">
  <?php echo buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], true) ?>
  <h5>Renseigner votre affaire <?php echo $_SESSION['offer'] ?></h5>
  <div class="card_list">
    <a class="card_newcase card-panel blue lighten-2" <?php echo 'href="'.$_SESSION['type'].'/facture"'; ?>>
      <span class="white-text">FACTURE
        <br><i class="material-icons">add_a_photo</i>
      </span>
      <br><div class="blacktext">X photo</div>
    </a>

    <?php if(strpos($_SESSION['type'],'SOLIDARITE') || $_SESSION['offer']=='PAC') { ?>
      <a class="card_newcase card-panel orange lighten-2 modal-trigger" <?php echo 'href="'.$_SESSION['type'].'/domic"'; ?>>
        <span class="white-text">DOMICILE & REVENU
          <br><i class="material-icons">add_a_photo</i>
        </span>
        <br><div class="blacktext">X photo</div>
      </a>
    <?php } ?>

    <a class="card_newcase card-panel deep-orange lighten-2" <?php echo 'href="'.$_SESSION['type'].'/existing"'; ?>>
      <span class="white-text">EXISTANT
        <br><i class="material-icons">add_a_photo</i>
      </span>
      <br><div class="blacktext">X photo(s)</div>
    </a>

    <a class="card_newcase card-panel purple lighten-2" <?php echo 'href="'.$_SESSION['type'].'/infoclient"'; ?>>
      <span class="white-text">INFOS CLIENT
        <br><i class="material-icons">assignment</i>
      </span>
    </a>
  </div>

  <div class="center">
    <a id="button_validate" class="waves-effect waves-light btn button_blue">Valider
      <i class="material-icons">check</i>
    </a>
  </div>
</section>

<!-- MODAL -->
<div id="modal_domic" class="modal">
  <div class="modal-content">
    <h4>Document</h4>
    <form class="" action="">
      <p>
        <label>
          <input class="with-gap" name="document" value="avis_dimposition" type="radio"/>
          <span class="option_document">Avis d'imposition</span>
        </label>
      </p>
      <p>
        <label>
          <input class="with-gap" name="document" value="acte_notarial" type="radio"  />
          <span class="option_document">Acte notarial</span>
        </label>
      </p>
    </form>
  </div>
  <div class="modal-footer">
    <a href="" class="modal-close waves-effect waves-green btn-flat" id= "button_ok_newcase">OK</a>
  </div>
</div>
<!-- MODAL -->

<div id="selected_item" class="hidden"></div>

<!-- <script>
  $('.option_document').click(function() {
    var selected_item = $(this).text().trim();

    if (selected_item == "Avis d'imposition") {
      selected_item="avis";
    }
    else if (selected_item == "Acte notarial"){
      selected_item="acte";
    }
    var href='partner_onecase-photos_domic.php?document='+selected_item;
    $('#button_ok_newcase').attr('href', href);

  });
</script> -->

  <script>
    // M.toast({html: 'Les documents numérisés seront envoyés au serveur OCR sitôt que l\'appareil disposera d\'une connection Internet.'});
    $('#button_validate').click(function() {
      M.toast({html: 'Les documents numérisés et les informations saisies seront envoyés au serveur sitôt que l\'appareil disposera d\'une connection Internet.'});
    });
  </script>

