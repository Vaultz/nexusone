<?php include_once(__DIR__."/template/setup.php");
$_SESSION['user']="partner";
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <h4>Préparer une affaire</h4>
      <h5>Choisir votre offre</h5>
      <div class="card_list">
        <?php
        $nbOffers = sizeof($_SESSION['CONFIG']['offers']);
        for ($i=0; $i < $nbOffers ; $i++) {
          ?>
          <a class="card_offer card-panel <?php echo $_SESSION['CONFIG']['offers'][$i][1] ?> modal-trigger" href="#modal_offer">
            <span class="white-text"><?php echo $_SESSION['CONFIG']['offers'][$i][0] ?></span>
          </a>
          <?php
        }
        ?>
    </section>

    <!-- MODAL -->
    <div id="modal_offer" class="modal">
      <div class="modal-content">
        <h4>Type</h4>
        <form class="" action="">
          <p>
            <label>
              <input class="with-gap" unchecked name="offer_type" value="classic" type="radio"  />
              <span class="option_offer_type">Classique</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="offer_type" value="fair" type="radio"  />
              <span class="option_offer_type">Solidarité</span>
            </label>
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <a href="" class="modal-close waves-effect waves-green btn-flat button_ok_option">OK</a>
      </div>
    </div>
    <!-- MODAL -->

    <div id="selected_offer" class="hidden"></div>
    <div id="selected_type" class="hidden"></div>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script type="text/javascript" src="js/partner_offer.js"></script>

  </body>
</html>
