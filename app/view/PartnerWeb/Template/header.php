<?php


$path=getPath();
function getPath() {
  $path=[
    ['', 'Accueil'],
  ];
/*  var_dump($_GET);*/
  $l_path=sizeof($_GET);
  
  switch($_GET['object']) {
    case 'files':
      array_push($path, ['#', 'Mes dossiers']);
      break;
  }

  switch($_GET['action']) {
    case 'createfile':
      array_push($path, ['#', 'Nouveau dossier']);
      break;
  }

  switch($_GET['step']) {
    case 'material':
      array_push($path, ['#', 'Choix du matériel']);
      break;
    case 'offer':
      array_push($path, ['#', 'Choix d\'une offre']);
      break;

  }
  
  return $path;
}

?>

<header>
  <nav class="main-nav">
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <a href="#" class="brand-logo center">NEXUS ONE</a>
      </div>
    </div>
  </nav>
  <nav class="path-nav">
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <?php 
          $pathSize=sizeof($path);
          for ($i=0; $i <$pathSize ; $i++) { 
            echo '<a class="pathelement" href="'.$path[$i][0].'">'.$path[$i][1].'</a>';
            if ($i+1<$pathSize) echo ' > ';
          }
        ?>
      </div>
    </div>
  </nav>

</header>
