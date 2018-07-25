<?php  ?>

<section class="">
  <h4>Justificatif de domicile</h4>
  <h5>Votre document</h5>
  <div class="smallfield select_justif">
    <select class="">
      <option value="" disabled selected>Choisissez votre type de document</option>
      <option value="">Facture EDF</option>
      <option value="" disabled>Acte notarié</option>
      <option value="" disabled>Facture d'eau</option>
      <option value="" disabled>...</option>
    </select>
  </div>
  <div class="hide justif_doc">
    Choisissez votre document
    <a href="#" class="waves-effect waves-light btn btn-small blue button_browse" >Parcourir</a>
    <span class="hide">facture_edf.pdf</span>
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
    <h6>Données contrat</h6>
    <div class="row">
      <div class="input-field col s6">
        <input value="112799" id="edl" type="text" class="validate">
        <label class="active" for="edl">EDL</label>
      </div>
      <div class="input-field col s6">
        <input value="98599" id="number" type="text" class="validate">
        <label class="active" for="number">Contrat n°</label>
      </div>

    </div>

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
    <div class="input-field col s6">
      <input value="<adresse client>" id="address" type="text" class="validate">
      <label class="active" for="address">Adresse</label>
    </div>
  <div>
	<a href="income" class="waves-effect waves-light btn blue right button_next">Suivant</a>
</section>

<script type="text/javascript">
  $('.select_justif').on('change', function() {
    $('.justif_doc').removeClass('hide');
  });
</script>
