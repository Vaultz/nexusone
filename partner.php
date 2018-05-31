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
        <a class="card_offer card-panel red accent-4 modal-trigger" href="#modal_offer">
          <span class="white-text">PAC
          </span>
        </a>
        <a class="card_offer card-panel brown darken-1 modal-trigger" href="#modal_offer">
          <span class="white-text">BOIS
          </span>
        </a>
        <a class="card_offer card-panel orange darken-4 modal-trigger" href="#modal_offer">
          <span class="white-text">FIOUL
          </span>
        </a>
        <a class="card_offer card-panel cyan darken-3 modal-trigger" href="#modal_offer">
          <span class="white-text">GAZ
          </span>
        </a>
        <a class="card_offer card-panel light-blue darken-3 modal-trigger" href="#modal_offer">
          <span class="white-text">CET
          </span>
        </a>
        <a class="card_offer card-panel brown lighten-2 modal-trigger" href="#modal_offer">
          <span class="white-text">MURS
          </span>
        </a>
    </section>


    <!-- MODAL -->
    <div id="modal_offer" class="modal">
      <div class="modal-content">
        <h4>Type</h4>
        <form class="" action="">
          <p>
            <label>
              <input class="with-gap" checked name="offer_type" value="classic" type="radio"  />
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
        <a href="partner_newcase.php?type=classic" class="modal-close waves-effect waves-green btn-flat button_ok_option">OK</a>
      </div>
    </div>


    <?php include_once(__DIR__."/template/scripts.php"); ?>
    <script>
      $(document).ready(function(){
        $('.modal').modal();
      });
    </script>
  </body>
</html>
