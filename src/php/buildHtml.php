<?php

function buildTitle($selectedOffer, $allOffers, $newcase) {
  $nbOffers=sizeof($allOffers);
  for ($i=0; $i < $nbOffers ; $i++) {
    if($selectedOffer == $allOffers[$i]['offre']) {
      $offer_color=$allOffers[$i]['couleur'];
      break;
    }
  }

  if($newcase) {
    $action='Préparer';
  }
  else {
    $action='Modifier';
  }

  $title='<h4>'.$action.' une affaire <span class="'.$offer_color.'">'.$selectedOffer.'</span>';
  if(strpos($_SESSION['type'],'SOLIDARITE')) {
    $title.=' solidaire';
  }
  $title.='</h4>';

  return $title;
}
