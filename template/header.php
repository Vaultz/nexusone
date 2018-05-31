<header>
  <nav>
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <?php
        if (isset($_SESSION["user"])) { ?>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="left material-icons">menu</i></a>
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
    <li><a class="waves-effect" href="#!"><i class="material-icons">format_list_bulleted</i>Mes affaires</a></li>
    <li><div class="divider"></div></li>
  </ul>

<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
