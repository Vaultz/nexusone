<?php
include_once(__DIR__."/template/setup.php");
include_once(__DIR__."/php/buildHtml.php");

if(isset($_GET['offer'])) {
  $_SESSION['offer']=$_GET['offer'];
}
if(isset($_GET['type'])) {
  $_SESSION['type']=$_GET['type'];
}

if(!isset($_SESSION['nbphoto_facture'])) {
  $_SESSION['nbphoto_facture']=0;
}
else {
  if(isset($_GET['nbphoto_facture']) && $_GET['nbphoto_facture']=='inc') {
    $_SESSION['nbphoto_facture']++;
  }
}

if(!isset($_SESSION['nbphoto_domic'])) {
  $_SESSION['nbphoto_domic']=0;
}
else {
  if(isset($_GET['nbphoto_domic']) && $_GET['nbphoto_domic']=='inc') {
    $_SESSION['nbphoto_domic']++;
  }
}

if(!isset($_SESSION['nbphoto_avis'])) {
  $_SESSION['nbphoto_avis']=0;
}
else {
  if(isset($_GET['nbphoto_avis']) && $_GET['nbphoto_avis']=='inc') {
    $_SESSION['nbphoto_avis']++;
  }
}

if(!isset($_SESSION['nbphoto_existant'])) {
  $_SESSION['nbphoto_existant']=0;
}
else {
  if(isset($_GET['nbphoto_existant']) && $_GET['nbphoto_existant']=='inc') {
    $_SESSION['nbphoto_existant']+=4;
  }
}

// IF we simulate an existing case
if (
  isset($_GET['nbphoto_domic']) &&
  isset($_GET['nbphoto_facture']) &&
  isset($_GET['nbphoto_existant'])
) {
  $newcase=false;
}
else $newcase=true;

$_SESSION['offer_title']=buildTitle($_SESSION['offer'], $_SESSION['OFFERS'], $newcase);

?>

<!DOCTYPE html>
<html>
  <?php include_once(__DIR__."/template/head.php"); ?>
  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>
    <section class="mobile_only">
      <?php echo $_SESSION['offer_title'] ?>
      <h5>Renseigner votre affaire</h5>
      <div class="card_list">
        <a class="card_newcase card-panel blue lighten-2" href="partner_onecase-photos_facture.php">
          <span class="white-text">FACTURE
            <br><i class="material-icons">add_a_photo</i>
          </span>
          <br><div class="blacktext"><?php echo $_SESSION['nbphoto_facture']; ?> photo</div>
        </a>

        <?php if(strpos($_SESSION['type'],'SOLIDARITE') || $_SESSION['offer']=='PAC') { ?>
          <a class="card_newcase card-panel orange lighten-2 modal-trigger" href="#modal_domic">
            <span class="white-text">DOMICILE & REVENU
              <br><i class="material-icons">add_a_photo</i>
            </span>
            <br><div class="blacktext"><?php echo $_SESSION['nbphoto_domic']; ?> photo</div>
          </a>
        <?php } ?>

        <a class="card_newcase card-panel deep-orange lighten-2" href="partner_onecase-photos_existing.php">
          <span class="white-text">EXISTANT
            <br><i class="material-icons">add_a_photo</i>
          </span>
          <br><div class="blacktext"><?php echo $_SESSION['nbphoto_existant']; ?> photo(s)</div>
        </a>

        <a class="card_newcase card-panel purple lighten-2" href="partner_onecase-infoclient.php">
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
    <?php
    include_once(__DIR__."/template/scripts.php");
    ?>

    <script>
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
    </script>

      <script>
        // M.toast({html: 'Les documents numérisés seront envoyés au serveur OCR sitôt que l\'appareil disposera d\'une connection Internet.'});
        $('#button_validate').click(function() {
          M.toast({html: 'Les documents numérisés et les informations saisies seront envoyés au serveur sitôt que l\'appareil disposera d\'une connection Internet.'});
        });
      </script>


  </body>
</html>
