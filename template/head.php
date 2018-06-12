<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/global.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <?php if(isset($_SESSION['current_module'])) {
    $module=' - '.$_SESSION['current_module'];
  }
  else {
    $module='';
  } ?>
  <title>NEXUS ONE <?php echo $module ?></title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
