<?php
	$_SESSION['OFFERS']=$OFFERS=json_decode(file_get_contents(getcwd().'/src/json/offers.json'),true)['OFFERS'];
?>

<section class="">

  <h4>Choix d'une offre</h4>
  <h5>Votre offre</h5>
  <div class="input-field smallfield">
    <select class="select_offer">
      <option value="" disabled selected>Choisissez votre offre</option>
      	<?php
      	$nbOffers=sizeof($OFFERS);
	  	for ($i=1; $i <$nbOffers ; $i++) {
	    	echo '<option value="'.$OFFERS[$i]['offre'].'"><a href="#!">'.$OFFERS[$i]['offre'].'</a></option>';
	  	}
	  	?>
    </select>
    <select class="select_suboffer">
      <option value="" disabled selected>Choisissez votre sous-offre</option>
    </select>
  </div>

  <h5>Installateur</h5>
  	<p>Êtes-vous l'installateur ?</p>
  	<label>
  		<input type="radio" name="install" value="1" checked/>
  		<span>Oui</span>
  	</label>
  	<label>
  		<input type="radio" name="install" value="0"/>
  		<span>Non</span>
  	</label>

		<div class="row">
			<div class="col s12 hide select_install">
				<div class="col s6">
					<select class="">
						<option value="" disabled selected>Choisissez votre installateur</option>
						<option value="">installateur 1</option>
						<option value="">installateur 2</option>
						<option value="">installateur 3</option>
						<option value="">installateur 4</option>
						<option value="">installateur 5</option>
						<option value="">installateur 6</option>
					</select>
				</div>
				<div class="col s6">
					<a href="#" class="waves-effect waves-light btn blue button_newfile tooltipped" data-tooltip="[A VENIR]">Demande de nouvel installateur</a>
				</div>
			</div>
		</div>

  <h5>Données complémentaires</h5>
	<div class="row">
		<div class="other_data col s12">
			<div class="row">
				<div class="input-field col s4">
					<input id="type" type="text" class="validate">
					<label for="type">Type de travaux</label>
				</div>
				<div class="input-field col s4">
					<input id="date" type="text" class="validate">
					<label for="date">Date de visite</label>
				</div>

			</div>
			<div class="row">
				<div class="input-field col s4">
					<input id="data" type="text" class="validate">
					<label for="data">Autres données client</label>
				</div>
				<div class="input-field col s4">
					<input id="etc" type="text" class="validate">
					<label for="etc">...</label>
				</div>

			</div>
		</div>

	</div>
	<a href="domic" class="waves-effect waves-light btn blue right button_next">Suivant</a>
</section>

<script type="text/javascript">
	// When selecting an offer
	var select_offer=$('.select_offer');
	var select_suboffer=$('.select_suboffer');
	var oReq = new XMLHttpRequest();
	function reqListener () {
		console.log(this.responseText);
	}
	$('.select_offer').on('change', function() {
	    select_suboffer.find('option').remove().append('<option value="" disabled selected>Choisissez votre sous-offre</option>');
		var userChoice = $(this).val();
	    var jsonData;
	    oReq.onload = function() {
			jsonData=JSON.parse(this.responseText);
			var jsonLength=jsonData.length;
			for (var i = 0; i < jsonLength; i++) {
				if(userChoice==jsonData[i].offre) {
					var subJsonLength=jsonData[i].sous_types.length;
					for (var j=0; j<subJsonLength; j++) {
						select_suboffer.append('<option value="">'+jsonData[i].sous_types[j].sous_type+'</option>');
					}
				}
	      	}
	      	select_suboffer.formSelect();
	    };
	    oReq.open("get", "../../../src/php/dump_offers.php", true);
	    oReq.send();
	});

	// When choosing if user==installer
	$('input[type=radio][name=install]').on('change', function() {
		var radioVal=$(this).val();
		var select_install=$('.select_install');

		if (radioVal=='1') {
			select_install.addClass('hide');
		}
		else if (radioVal=='0') {
			select_install.removeClass('hide');

		}
	});
</script>
