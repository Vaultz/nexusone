<?php
include_once(__DIR__."/template/setup.php");
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <?php echo $_SESSION['offer_title'] ?>
      <h5>Informations client</h5>
      <div class="main_panel row">
        <form class="col s12" action="" method="">

          <div class="input-field">
            <input  id="input_date" type="text" class="datepicker">
            <label for="input_date">Date de visite</label>
          </div>

          <div class="input-field">
            <input  id="input_addr" type="text" class="validate">
            <label for="input_addr">Adresse</label>
          </div>

          <div class="input-field">
            <input  id="input_mail" type="text" class="validate">
            <label for="input_mail">Email</label>
          </div>

          <div class="input-field">
            <input  id="input_tel" type="text" class="validate">
            <label for="input_tel">Téléphone fixe</label>
          </div>

          <div class="input-field">
            <input  id="input_mobile" type="text" class="validate">
            <label for="input_mobile">Téléphone mobile</label>
          </div>

          <div class="center">
            <a href="partner_onecase.php" class="btn button_blue waves-effect waves-light ">Valider</a>
          </div>
        </form>
      </div>

    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.datepicker').datepicker();
    });
    </script>

  </body>
</html>
