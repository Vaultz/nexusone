<?php include_once(__DIR__."/template/setup.php");

$_SESSION['user']="partner";
$_SESSION['current_module']="Module Partenaire Mobile";
$OFFERS=$_SESSION['OFFERS'];
$_SESSION['offer']=null;
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
        $nbOffers = sizeof($OFFERS);
        for ($i=1; $i <$nbOffers ; $i++) { ?>
          <a class='dropdown-trigger card_offer card-panel <?php echo $OFFERS[$i]['couleur'] ?>' href='#' data-target='<?php echo 'dropdown_'.$OFFERS[$i]['offre'] ?>'><span class="white-text"><?php echo $OFFERS[$i]['offre'] ?></span></a>
          <ul id='<?php echo 'dropdown_'.$OFFERS[$i]['offre'] ?>' class='dropdown-content'>
          <?php
          $nbSsTypes = sizeof($OFFERS[$i]['sous_types']);
          for ($j=0; $j <$nbSsTypes ; $j++) { ?>
            <li><a href=<?php echo 'partner_onecase.php?offer='.trim($OFFERS[$i]['offre']).'&type='.$OFFERS[$i]['sous_types'][$j]['lien'] ?>><?php echo $OFFERS[$i]['sous_types'][$j]['sous_type'] ?></a></li>
            <li class="divider" tabindex="-1"></li>
          <?php
          } ?>
          </ul>
          <?php
        }
        ?>
    </section>

    <!-- MODAL -->
    <!-- <div id="modal_offer" class="modal">
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
    </div> -->
    <!-- MODAL -->

    <div id="selected_offer" class="hidden"></div>
    <div id="selected_type" class="hidden"></div>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script type="text/javascript">
    // Remember selected offer
    $('.card_offer').click(function() {

      var selected_offer = $(this).text().trim();
      $('#selected_offer').text(selected_offer);

      $(document.body).append('<div id="selected_offer" class="hidden">'+selected_offer+'</div>');

      var href='partner_onecase.php?offer='+selected_offer+'&type='+$('#selected_type').text();
      $('.button_ok_option').attr('href', href);

      // console.log("offer : "+$('#selected_offer').text()+' ; type : '+$('#selected_type').text());
    });


    // Redirect to selected type offer
    $('.option_offer_type').click(function() {
      var selected_offer = $('#selected_offer').text();
      var href='partner_onecase.php?offer='+selected_offer;
      var option = $(this).text();

      if (option=="Classique") {
        var type = 'classic';
      }
      else if (option=="Solidarité") {
        var type = 'fair';
      }
      $('#selected_type').text(type);
      $('.button_ok_option').attr('href', href+'&type='+type);

      // console.log("offer : "+$('#selected_offer').text()+' ; type : '+$('#selected_type').text());
    });

    </script>
  </body>
</html>
