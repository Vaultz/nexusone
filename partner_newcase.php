<?php
include_once(__DIR__."/template/setup.php");
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
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <h4>Préparer une affaire</h4>
      <h5>Renseigner votre affaire</h5>
      <div class="card_list">
        <a class="card_newcase card-panel blue lighten-2" href="partner_facture.php">
          <span class="white-text">FACTURE
            <br><i class="material-icons">add_a_photo</i>
          </span>
          <br><?php echo $_SESSION['nbphoto_facture']; ?> photo
        </a>

        <?php if($_SESSION['type']=="fair") { ?>
          <a class="card_newcase card-panel orange lighten-2" href="#">
            <span class="white-text">AVIS D'IMPOS°
              <br><i class="material-icons">add_a_photo</i>
            </span>
            <br><?php echo $_SESSION['nbphoto_facture']; ?> photo
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

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
