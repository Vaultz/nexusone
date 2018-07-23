
<section class="">
  <h4>Facture client</h4>
  <h5>Votre document</h5>

  <div class="justif_doc">
    Choisissez votre document
  	<a href="#" class="waves-effect waves-light btn btn-small blue" >Parcourir</a>
    <span class="hide">facture_client.pdf</span>
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

    <h5>Données travaux</h5>
    <div class="row">
      <div class="input-field col s6">
        <input value="Poêle à granulés MCZ" id="type" type="text" class="validate">
        <label class="active" for="type">Type d'appareil</label>
      </div>
      <div class="input-field col s6">
        <input value="Tilda Comfort Air MCZ" id="ref" type="text" class="validate">
        <label class="active" for="ref">Référence du matériel</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input value="Rendement : 90.3% ~ CO : 0,017% ~ I=0,08" id="tech" type="text" class="validate">
        <label class="active" for="tech">Données techniques</label>
      </div>
    </div>

    <h6>Données facture</h6>
    <div class="row">
      <div class="input-field col s6">
        <input value="4312.45" id="sum" type="text" class="validate">
        <label class="active" for="sum">Montant total de la facture</label>
      </div>
    </div>

    <h6>Mentions obligatoires</h6>
    <p>Présence du mot "Facture" :
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span class="labelcheckbox">_</span>
      </label>
    </p>
    <p>Signature et tampon :
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span class="labelcheckbox">_</span>
      </label>
    </p>
    <a class="waves-effect waves-light btn blue" href="statement">Valider</a>
  </div>
</section>

<script type="text/javascript">

  $('.select_justif').on('change', function() {
    $('.justif_doc').removeClass('hide');
  });
  $('.justif_doc').on('click', function() {
    $('.justif_doc span').removeClass('hide');
    $('.preloader-wrapper').removeClass('hide');
    setTimeout(function(){
      $('.preloader-wrapper').addClass('hide');
      $('.extracted_data').removeClass('hide');
    }, 2000);
  });
  // $('.tooltipped').tooltip();
</script>
