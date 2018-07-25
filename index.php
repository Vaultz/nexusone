<?php
session_start();

$_SESSION['server']='PROD';
$_SESSION['OFFERS']=json_decode(file_get_contents(getcwd().'/src/json/offers.json'),true)['OFFERS'];
include_once(getcwd()."/src/php/buildHtml.php");
include(getcwd().'/app/controller/Controller.php');
$path = ltrim($_SERVER['REQUEST_URI'], '/');
$elements = explode('/', $path);
$controller=new Controller($elements);

/* Managing the URI. Depending on which page the user is on, we have to navigate through the directories to recover the files */
function getBaseUri() {
  $uri=explode('/',$_SERVER['REQUEST_URI']);
  $uriSize=sizeof($uri);
  /*  var_dump("URI ".$uriSize);*/
  switch ($uriSize) {
    case 2:
      return '';

    case 3:
      return '../';

    case 4:
      return '../../';

    case 5:
      return '../../../';

    case 6:
      return '../../../../';

    default:
      return 'ERROR'.$uriSize;
  }
}

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
      case 'materials':
        array_push($path, ['/partner_web/materials/showmaterials', 'Mes matériels']);
        break;
    }
  }
  if(isset($_GET['action'])) {
    switch($_GET['action']) {
      case 'createfile':
        array_push($path, ['/partner_web/files/createfile/material', 'Nouveau dossier']);
        break;
      case 'creatematerial':
        array_push($path, ['/partner_web/materials/creatematerial/info', 'Nouveau matériel']);
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
