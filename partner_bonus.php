<?php
include_once(__DIR__."/template/setup.php");
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <h5>Montant de la prime sur une offre <?php echo$_SESSION['offer'] ?> </h5>
      <div class="card_list">
        <form class="" action="index.html" method="post">
          <div class="input-field">
            <select>
              <?php for ($i=1; $i <=10 ; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option> <?php
              } ?>
            </select>
            <label>Nombre de personnes</label>
          </div>
          <div class="input-field">
            <select id="select_nb_foyers">
              <?php for ($i=1; $i <=5 ; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option> <?php
              } ?>
            </select>
            <label>Nombre de foyers fiscaux</label>
          </div>
          <div class="input_foyers">
            <div id="input_foyer_1">
              <label for="input_rfr_1">Revenu Fiscal de Référence 1</label>
              <input placeholder="Saisissez le RFR" id="input_rfr_1" type="text" class="validate">
            </div>
          </div>
        </form>
      </div>
      <div class="center">
        <h1>[calcul du montant]</h1>
      </div>
      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_onecase.php">Retour</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('select').formSelect();
        $('#select_nb_foyers').change(function() {
          var selectedNb=$(this).val();
          inputTag='';
          $('.input_foyers').empty();
          for (var i = 1; i <=selectedNb ; i++) {
            inputTag+='<div id="input_foyer_'+i+'"><label for="input_rfr_'+i+'">Revenu Fiscal de Référence '+i+'</label><input placeholder="Saisissez le RFR" id="input_rfr_'+i+'" type="text" class="validate"></div></div>';
          }
          $('.input_foyers').append(inputTag);
        })
      });
    </script>

  </body>
</html>
