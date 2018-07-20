<?php
	$_SESSION['OFFERS']=$OFFERS=json_decode(file_get_contents(getcwd().'/src/json/offers.json'),true)['OFFERS'];
?>

<section class="">

  <h4>Préparer une affaire</h4>
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
  		<input type="radio" name="install" checked/>
  		<span>Oui</span>
  	</label>
  	<label>
  		<input type="radio" name="install"/>
  		<span>Non</span>
  	</label>

		<div class="smallfield">
			<select class="select_install hide">
				<option value="" disabled selected>Choisissez votre installateur</option>
				<option value="">installateur 1</option>
				<option value="">installateur 2</option>
				<option value="">installateur 3</option>
				<option value="">installateur 4</option>
				<option value="">installateur 5</option>
				<option value="">installateur 6</option>
			</select>
		</div>

  <h5>Données complémentaires</h5>
</section>

<script type="text/javascript">
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
</script>
