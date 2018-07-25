<section>
	<div class="align-box">
		<h4>Mes dossiers</h4>
		<a href="createfile/material" class="waves-effect waves-light btn blue button_newfile tooltipped" data-tooltip="Lance la constitution d'un nouveau dossier.">Nouveau dossier</a>
	</div>
	<h5>Recherche de dossier</h5>
	<article class="searchfile row">
		<form class="col s12">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" name="" id="name">
					<label for="name">Nom</label></div>
				<div class="input-field col s6">
					<input type="text" name="" id="address">
					<label for="address">Adresse</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="" id="city">
					<label for="ctiy">Ville</label></div>
				<div class="input-field col s6">
					<input type="text" name="" id="date">
					<label for="date">Date d'installation</label></div>
				<div class="input-field col s6">
					<input type="text" name="" id="nbfact">
					<label for="nbfact">Numéro de facture</label></div>
				<div class="input-field col s6">
					<a class="waves-effect waves-light btn blue tooltipped" data-tooltip="Valide le filtrage de dossiers suivant les données saisies.">Valider</a>
				</div>
			</div>
		</form>
	</article>
	<h5>Liste des dossiers</h5>
    <table class="highlight tooltipped" data-position="top" data-tooltip="[A VENIR] Consultation et modification d'un dossier">
	    <thead>
	      <tr>
	          <th>ID</th>
	          <th>Nom</th>
	          <th>Prénom</th>
	          <th>N° facture</th>
	          <th>Date d'installation</th>
	          <th>Statut</th>
	          <th>Générer BR</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td><a href="#">1656</a></td>
	      	<td>Duhamel</td>
	      	<td>Geneviève</td>
	      	<td>484964</td>
	      	<td>06/05/2018</td>
	      	<td>En cours</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1657</a></td>
	      	<td>Auger</td>
	      	<td>Eliot</td>
	      	<td>1604384</td>
	      	<td>12/03/2018</td>
	      	<td>Nouveau</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1658</a></td>
	      	<td>Doyon</td>
	      	<td>Warrane</td>
	      	<td>4164189</td>
	      	<td>31/04/2018</td>
	      	<td>Validé</td>
					<td>
						<label>
					  	<input type="checkbox" class="filled-in" />
			        <span class="labelcheckbox"></span>
			      </label>
					</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1660</a></td>
	      	<td>Coupace</td>
	      	<td>Claire</td>
	      	<td>615464</td>
	      	<td>05/08/2018</td>
	      	<td>Validé</td>
					<td>
						<label>
					  	<input type="checkbox" class="filled-in" />
			        <span class="labelcheckbox"></span>
			      </label>
					</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1661</a></td>
	      	<td>Bourassa</td>
	      	<td>Monique</td>
	      	<td>94687</td>
	      	<td>21/12/2017</td>
	      	<td>Validé</td>
					<td>
						<label>
					  	<input type="checkbox" class="filled-in" />
			        <span class="labelcheckbox"></span>
			      </label>
					</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1662</a></td>
	      	<td>Raymond</td>
	      	<td>Xavier</td>
	      	<td>54687</td>
	      	<td>01/05/2018</td>
	      	<td>Validé</td>
					<td>
						<label>
					  	<input type="checkbox" class="filled-in" />
			        <span class="labelcheckbox"></span>
			      </label>
					</td>
	      </tr>
	      <tr>
	      	<td><a href="#">1659</a></td>
	      	<td>Vernadeau</td>
	      	<td>Sébastien</td>
	      	<td>4643044</td>
	      	<td>15/11/2017</td>
	      	<td>Refusé</td>
	      </tr>
	    </tbody>
  	</table>
    <a class="waves-effect waves-light btn blue right button_br tooltipped" data-position="left" data-tooltip="Génère le bon de remboursement correspondant aux affaires sélectionnées." href="#">Générer BR</a>
</section>
