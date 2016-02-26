<?php

// print_r($_POST);
$test = json_decode($var, true);

?>


<h2>Ajouter une etape</h2>
<form action="<?php echo(WEBROOT."controlerRecette/etape2") ?>" method="post">
	<label>Nom :</label>
	<input type="text" name="name_etape"></input>
	<br/>
	<label>Ingredients :</label>
	<select id="ing" onChange="getQuantiter()">
		<option id="txt_tmp1">--selectionner ingredients--</option>
		<?php
			for($i=0; isset($test["Base"]["ingredients"][$i]); $i++){
		?>
		<option value="<?php echo($test["Base"]["ingredients"][$i]['nom'].'_'.$test["Base"]["ingredients"][$i]['type']); ?>" ><?php echo($test["Base"]["ingredients"][$i]['nom']); ?></option>

		<?php
			}
		?>
	</select>
	<input type="number" name="number" id="qua" value="0"></input>
	<select id="dosse" onChange="supTmp('txt_tmp2')">
		<option id="txt_tmp2">--Selectionner une dose--</option>
	</select>
	<a onClick="add_ing2()" value="Ajouter Ingredients" >Ajouter Ingredients</a>
	<br/>
	<div id="list_ingredient">
		<ul id="ul">

	   	</ul>
	</div>
	<br/>
	<label>Descriptif :</label>
	<textarea  name="Descriptif"></textarea>
	<br/>
	<select id="suite" name="suite" onChange="choix()">
		<option id="sup">--choisir la prochaine etape--</option>
		<option>Ajouter une etape</option>
		<option>Finir</option>
	</select>
	<br/>
	<input type="hidden" name="json" value='<?php echo(serialize($test)); ?>'></input>
	<input id="valide" type="submit" disabled="disabled"/>
</form>
<br/>