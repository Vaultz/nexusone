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

    </section>

    <?php include_once(__DIR__."/template/scripts.php"); ?>

  </body>
</html>
