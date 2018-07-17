<header>
  <nav>
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <?php
        if (isset($_SESSION["user"])) { ?>
          <a href="#" data-target="slide-out" id="button_sidenav" class="sidenav-trigger"><i class="left material-icons">menu</i></a>
        <?php } ?>
        <a href="index.php" class="brand-logo">NEXUS ONE</a>
        <?php
        if (isset($_SESSION["user"])) { ?>
          <a href="index.php"><i class="button_logout right material-icons">power_settings_new</i></a>
        <?php } ?>
      </div>
    </div>
  </nav>
</header>

  <ul id="slide-out" class="sidenav">
    <li><a class="waves-effect subheader" href="#!">Menu</a></li>
    <?php
    $href='#';
    $bonus_link_id='bonus_link_inactive';
    if(isset($_SESSION['offer'])) {
      if(strpos($_SESSION['type'],'SOLIDARITE') || $_SESSION['offer']=='PAC') {
        $href='partner_bonus.php';
        $bonus_link_id='';
      }
      else {
        $bonus_link_id.="_wrong_offer";
      }
    }
    else {
      $bonus_link_id.="_no_offer";
    } ?>
    <li><a id='<?php echo $bonus_link_id ?>' class="waves-effect" href="<?php echo $href ?>"><i class="material-icons">euro_symbol</i>Calculer la prime</a></li>
    <li><a class="waves-effect" href="partner_offers.php"><i class="material-icons">fiber_new</i>Préparer une affaire</a></li>
    <li><a class="waves-effect" href="partner_allcases.php"><i class="material-icons">format_list_bulleted</i>Modifier une affaire</a></li>
    <li><div class="divider"></div></li>
  </ul>

<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $('#bonus_link_inactive_no_offer').click(function() {
    M.toast({html: 'Veuillez sélectionner une offre.'});
  });
  $('#bonus_link_inactive_wrong_offer').click(function() {
    M.toast({html: 'L\'offre sélectionnée n\'ouvre pas le droit à une prime.'});
  });

</script>
