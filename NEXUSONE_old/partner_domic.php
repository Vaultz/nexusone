<?php
include_once(__DIR__."/template/setup.php");
$document=$_GET['document'];
if ($document=='avis') {
  $title = "Avis d'imposition";
  $toast = "Ici, l'utilisateur est invité à prendre en photo son ou ses avis d'imposition.";
}
else if($document=='acte') {
  $title = "Acte notarial";
  $toast = "Ici, l'utilisateur est invité à prendre l'acte notarial en photo.";
}
?>

<!DOCTYPE html>
<html>

  <?php include_once(__DIR__."/template/head.php"); ?>

  <body>
    <?php include_once(__DIR__."/template/header.php"); ?>

    <section class="mobile_only">
      <?php echo $_SESSION['offer_title'] ?>

      <h5>
      <?php echo $title ?>
      </h5>

      <div class="card_list">
        <img class="document" src="images/<?php echo $document; ?>.jpeg" alt="">
        <?php if($document=='avis') { ?>
          <i class="material-icons">add_circle_outline</i>
        <?php } ?>
      </div>

      <div class="center">
        <a class="waves-effect waves-light btn button_blue" href="partner_newcase.php?nbphoto_domic=inc">Valider</a>
      </div>
    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

    <script>
      M.toast({html: 'L\'utilisateur est invité à prendre une photo de son document.'})
    </script>

  </body>
</html>
