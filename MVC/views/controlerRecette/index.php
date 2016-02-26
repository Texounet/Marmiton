<script language="javascript"> 
	
</script> 	

<div class="content">

	<!-- Ajout des info general -->
	<form action="<?php echo(WEBROOT."controlerRecette/etape0") ?>" method="post">
		<div class="contentComposant">
			<h3 class="title" >Information general</h3>
			<div>
				<label>Nom de la recette</label>
				<input type="text" name="name" id="title_recette"></input><br/>

				<label>Temps de realisation</label>
				<input type="number" name="temps" id="temps"></input><br/>

				<label>Votre mail</label>
				<input type="text" name="mail" id="mail"></input><br/>

				<label>Votre nom utilisateur</label>
				<input type="text" name="createur" id="utiilisateur"></input><br/>

				<label>Tag</label>
				<input type="text" id="tag"></input><br/>
				<input type="button" value="Ajouter Ingredients" onClick="add_tag()"></input>
				<div id="list_tag">
					<ul>

			    	</ul>
				</div>

			</div>
		</div>

		<!-- Ajout des ingredients -->

		<div class="contentComposant">
			<h3 class="title">Ingredients</h3>
			<div class="formIngredients">
				<label>Ingredient</label>
				<input type="text" id="ingredients"></input><br/>
				<label>Type de produit</label>
				<select id="id_Tingredients">
					<option value="2">Solide</option>
					<option value="1">Liquide</option>
				</select>
				<br/>
				<input type="button" value="Ajouter Ingredients" onClick="add_ing()"></input>		
			</div>
		</div>

		<div id="list_ingredient">
			<ul>

	    	</ul>
		</div>
		<input type="submit" value="Passer a l'etape 2"></input>

	</form>
</div>
