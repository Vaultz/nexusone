<?php

function buildTitle() {
  $nbOffers=sizeof($_SESSION['CONFIG']['offers']);
  for ($i=0; $i < $nbOffers ; $i++) {
    if($_SESSION['offer'] == $_SESSION['CONFIG']['offers'][$i][0]) {
      $offer_color=$_SESSION['CONFIG']['offers'][$i][1];
      break;
    }
  }
  if($_SESSION['type']=='classic') {
    $type="classique";
  }
  else if ($_SESSION['type']=='fair') {
    $type="solidarité";
  }
  return '<h4>Préparer une affaire <span class="'.$offer_color.'">'.$_SESSION['offer'].'</span> '.$type.'</h4>';
}
