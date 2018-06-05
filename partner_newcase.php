<?php
include_once(__DIR__."/template/setup.php");
include_once(__DIR__."/php/buildHtml.php");

if(isset($_GET['offer'])) {
  $_SESSION['offer']=$_GET['offer'];
}
if(isset($_GET['type'])) {
  $_SESSION['type']=$_GET['type'];
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

$_SESSION['offer_title']=buildTitle();

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
        <a class="card_newcase card-panel blue lighten-2" href="partner_facture.php">
          <span class="white-text">FACTURE
            <br><i class="material-icons">add_a_photo</i>
          </span>
          <br><?php echo $_SESSION['nbphoto_domic']; ?> photo
        </a>

        <?php if($_SESSION['type']=='fair' || $_SESSION['offer']=='PAC') { ?>
          <a class="card_newcase card-panel orange lighten-2 modal-trigger" href="#modal_domic">
            <span class="white-text">DOMICILIATION & REVENU
              <br><i class="material-icons">add_a_photo</i>
            </span>
            <br><?php echo $_SESSION['nbphoto_domic']; ?> photo
          </a>
        <?php } ?>

        <a class="card_newcase card-panel deep-orange lighten-2" href="partner_current.php">
          <span class="white-text">EXISTANT
          <br><i class="material-icons">add_a_photo</i>
          </span>
          <br><?php echo $_SESSION['nbphoto_existant']; ?> photo(s)
        </a>

        <a class="card_newcase card-panel purple lighten-2" href="partner_infoclient.php">
          <span class="white-text">INFOS CLIENT
          <br><i class="material-icons">assignment</i>
          </span>
        </a>
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue">Envoyer
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

    <script type="text/javascript" src="js/partner_newcase.js"></script>

  </body>
</html>
