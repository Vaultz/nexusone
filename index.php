<?php 
session_start();

$_SESSION['server']='PROD';


$_SESSION['OFFERS']=json_decode(file_get_contents(getcwd().'/src/json/offers.json'),true)['OFFERS'];
include_once(getcwd()."/src/php/buildHtml.php");
include(getcwd().'/app/controller/Controller.php');
$path = ltrim($_SERVER['REQUEST_URI'], '/');    
$elements = explode('/', $path); 
$controller=new Controller($elements);


/*Managing the URI. Depending on which page the user is on, whe have to navigate through the directories to recover the files*/
function getBaseUri() {

  $uri=explode('/',$_SERVER['REQUEST_URI']);
  
  $uriSize=sizeof($uri);
  var_dump("URI ".$uriSize);

  switch ($uriSize) {
    
    
    case 2:
      return '';

    case 3:
      return '../';

    case 4:
      return '';

    case 6:
      return '../../';

    case 7:
      return '../../../';

    default:
      return 'ERROR'.$uriSize;
  }

}



?>
