<?php  ?>

<section class="">
  <h4>Revenus</h4>
  <h5>Votre document</h5>

  <div class="justif_doc">
    Choisissez votre document
  	<a href="#" class="waves-effect waves-light btn btn-small blue button_browse" >Parcourir</a>
    <span class="hide">avis_dimposition.pdf</span>
    <div class="preloader-wrapper small active hide">
      <div class="spinner-layer spinner-green-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="extracted_data hide col s12">
    <h5>Données extraites</h5>
    <h6>Données client</h6>
    <div class="row">
      <div class="input-field col s6">
        <input value="Perunocci" id="name" type="text" class="validate">
        <label class="active" for="name">Nom</label>
      </div>
      <div class="input-field col s6">
        <input value="Jean-Marc" id="firstname" type="text" class="validate">
        <label class="active" for="firstname">Prénom</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input value="<adresse client>" id="address" type="text" class="validate">
          <label class="active" for="address">Adresse</label>
      </div>
    </div>

    <h6>Données fiscales</h6>
    <div class="row">
      <div class="input-field col s6">
        <input value="2" id="nbpeople" type="text" class="validate">
        <label class="active" for="nbpeople">Nom de personnes du foyer</label>
      </div>
      <div class="input-field col s6">
        <input value="36 499" id="rfr" type="text" class="validate">
        <label class="active" for="rfr">Revenu fiscal de référence</label>
      </div>
    </div>
    <a class="btn-floating right waves-effect waves-light green tooltipped" data-tooltip="Ce bouton permet à l'utilisateur d'envoyer de nouveaux avis d'imposition. Le montant et le type de la prime se mettent à jour en conséquence."><i class="material-icons">add</i></a>
    <h5>Aide</h5>
    <p>Montant : <i>montant de la prime</i></p>
    <p>Type : <i>type de prime</i></p>
    <a class="waves-effect waves-light btn blue" href="contrib">Valider</a>
  </div>
</section>

<script type="text/javascript">

</script>
