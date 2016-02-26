<div>
	<form  action="<?php echo(WEBROOT."controlerRecherche/result") ?>" method="post">
		<label>Nom: </label>
		<input type="text" name="name"></input><br/>

		<label>Temps min: </label>
		<input type="number" name="tmp_min"></input><br/>

		<label>Temps max: </label>
		<input type="number" name="tmp_max"></input><br/>

		<label>créateur</label>
		<input type="text" name="pseudo"></input><br/>

		<input type="submit" value="Rechercher"></input>
	</form>
</div>