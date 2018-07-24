<?php

$path=getPath();
function getPath() {
  $path=[
    ['/partner_web/', 'Accueil'],
  ];
  $l_path=sizeof($_GET);
  if(isset($_GET['object'])) {
    switch($_GET['object']) {
      case 'files':
      array_push($path, ['/partner_web/files/showfiles', 'Mes dossiers']);
      break;
    }
  }
  if(isset($_GET['action'])) {
    switch($_GET['action']) {
      case 'createfile':
      array_push($path, ['/partner_web/files/createfile/material', 'Nouveau dossier']);
      break;
    }
  }
  if(isset($_GET['step'])) {
    switch($_GET['step']) {
      case 'material':
        array_push($path, ['#', 'Choix du matériel']);
        break;
      case 'offer':
        array_push($path, ['#', 'Choix d\'une offre']);
        break;
      case 'domic':
        array_push($path, ['#', 'Justificatif de domicile']);
        break;
      case 'income':
        array_push($path, ['#', 'Revenus']);
        break;
      case 'contrib':
        array_push($path, ['#', 'Cadre de contribution']);
        break;
      case 'quote':
        array_push($path, ['#', 'Devis']);
        break;
      case 'customer':
        array_push($path, ['#', 'Facture client']);
        break;
    }
  }
  return $path;
}
?>

<header>
  <nav class="main-nav">
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <a href="/" class="brand-logo center">NEXUS ONE</a>
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
