<?php
if($_GET['action']=='createfile' && $_GET['step']=='material') {
  $button='<a href="../createfile/offer" class="waves-effect waves-light btn blue">Choisir</a>';
}
else {
  $button='';
}
if($_GET['object']=='materials') {
  $new_material_button='creatematerial/info';
}
else if($_GET['object']=='files') {
  $new_material_button='../../materials/creatematerial/info';
}
?>

<section>
	<div class="align-box">
		<h4>Mes matériels</h4>
		<a href="<?php echo $new_material_button ?>" class="waves-effect waves-light btn blue button_newfile">Nouveau matériel</a>
	</div>
	<h5>Recherche de matériel</h5>
	<article class="searchfile row">
		<form class="col s12">
			<div class="row">
				<div class="input-field col s4">
					<input type="text" name="" id="ref">
					<label for="ref">Référence</label></div>
				<div class="input-field col s4">
					<input type="text" name="" id="name">
					<label for="name">Nom</label></div>
				<div class="input-field col s4">
					<input type="text" name="" id="brand">
					<label for="brand">Marque</label>
				</div>
				<div class="input-field col s4">
					<input type="text" name="" id="tech">
					<label for="tech">"Critère technique"</label></div>
				<div class="input-field col s4">
					<a class="waves-effect waves-light btn blue tooltipped" data-tooltip="Permet de filtrer les dossiers suivant les données saisies.">Valider</a>
				</div>
			</div>
		</form>
	</article>
	<h5>Liste des matériels</h5>
    <table class="highlight filestable">
	    <thead>
	      <tr>
	          <th>Référence</th>
	          <th>Nom</th>
	          <th>Type</th>
	          <th>Marque</th>
	          <th>"Critère technique"</th>
	          <th></th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td>FTXM50M</td>
	      	<td>Unité murale blue</td>
	      	<td>Pompe à chaleur</td>
	      	<td>Daikin</td>
	      	<td></td>
	      	<td><?php echo $button; ?></td>
	      </tr>
	      <tr>
	      	<td>RXM50M</td>
	      	<td>Groupe mono blue</td>
	      	<td>Pompe à chaleur</td>
	      	<td>Daikin</td>
	      	<td>SCOP 4.6</td>
	      	<td><?php echo $button; ?></td>
	      </tr>
	      <tr>
	      	<td>A-000000-03534</td>
	      	<td>Musa 2.0 Comfort Alt 14 MCZ</td>
	      	<td>Poêle à granulés</td>
	      	<td>Musa</td>
	      	<td></td>
	      	<td><?php echo $button; ?></td>
	      </tr>
	      <tr>
	      	<td></td>
	      	<td>INOA EVO 24 VMC GPO</td>
	      	<td>Chauffe-eau</td>
	      	<td>Chaffoteaux</td>
	      	<td></td>
	      	<td><?php echo $button; ?></td>
	      </tr>
	    </tbody>
  	</table>
</section>
