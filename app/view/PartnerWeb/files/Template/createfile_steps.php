<?php

$steps=[
  ['material', '1. Choix du matériel'],
  ['offer', '2. Choix d\'une offre'],
  ['domic', '3. Justificatif de domicile'],
  ['income', '4. Revenus'],
  ['contrib', '5. Cadre de contribution'],
  ['quote', '6. Devis'],
  ['customer', '7. Facture client'],
  ['statement', '8. Attestation sur l\'honneur']
];
?>

<div class="row">
  <div class="col s12">
    <ul class="tabs steptab">
      <?php
      $disabled='';
      $l_steps=sizeof($steps);
      for ($i=0; $i <$l_steps ; $i++) {
        if($_GET['step']==$steps[$i][0]) {
          $active='active';
        }
        else {
          $active='';
        }
        echo '<li class="tab '.$disabled.'"><a class="'.$active.'" target="_self" href="'.$steps[$i][0].'">'.$steps[$i][1].'</a></li>';
        if($active=='active') {
          $disabled='disabled';
        }
      }
      ?>
    </ul>
  </div>
</div>
