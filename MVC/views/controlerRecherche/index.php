<div>
	<form action="<?php echo(WEBROOT."controlerRecherche/result") ?>" method="post">

		<!-- Partie recette-->
		<label>Nom: </label>
		<input type="text" name="name"></input><br/>

		<label>Temps min: </label>
		<input type="number" name="tmp_min"></input><br/>

		<label>Temps max: </label>
		<input type="number" name="tmp_max"></input><br/>

		<label>créateur</label>
		<input type="text" name="pseudo"></input><br/>

		<!-- Partie tag-->
		<label>Tag</label>
		<input type="text" id="tag"></input><br/>
		<input type="button" value="Ajouter Ingredients" onClick="add_tag()"></input>
		<div id="list_tag">
			<ul>

			</ul>
		</div>

		<!-- Partie ingredient-->
		<label>Ingredient</label>
		<input type="text" id="ingredients"></input><br/>

		<input type="button" value="Ajouter Ingredients" onClick="add_ing()"></input>		

		<div id="list_ingredient">
			<ul>

	    	</ul>
		</div>

		<input type="submit" value="Rechercher"></input>
	</form>
</div>