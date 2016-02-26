<?php
	// print_r($ing)
	// print_r($recette[0]);
	// print_r($etape);
	// print_r($tag);
	$com2 = json_decode($com,true);
	// print_r($com2);
?>
<div class="contain">
	<div class="name"><?php echo $recette[0]['nom'] ?></div>
	<div class="infog">
		<p>Temps: <?php echo $recette[0]['temps'] ?> minutes</p>
		<p>Createur: <?php echo $recette[0]['pseudo'] ?></p>
		<p>Mail: <?php echo $recette[0]['mail'] ?></p>
		<p>Date de creation: <?php echo $recette[0]['date'] ?></p>
	</div>
	<div class="ingredient">
		<p class="title_ingredient">Ingredients</p>
		<div class="contain_ingredient">
			<?php
				for ($i=0; isset($ing[$i]) ; $i++) { 
					?>
					<p class="p2"><?php echo $ing[$i]['ingredients'] ?>:</p>
					<p class="p2"><?php echo $ing[$i]['quantiter'] ?></p><br/>
				<?php }
			?>
		</div>
	</div>
	<div class="ingredient">
		<p class="title_ingredient">Tag</p>
		<div class="tag">
			<?php
				for ($i=0; isset($tag[$i]) ; $i++) { 
			?>
				<p class="btn btn-primary"><?php echo $tag[$i]['tag']; ?></p>
			<?php
				}
			?>
		</div>
	</div>
	<div class="etape">
		<?php for ($i=0; isset($etape[$i]) ; $i++) { ?>
			<div class="etape2" id="etape_<?php echo $i; ?>">
				<p class="title_etape"><?php echo $etape[$i]['nom'] ?></p>
				<div class="decal">
					<p>Ingredient de la recette</p>
					<?php
						for ($i2=0; isset($etape[$i]['ingredients'][$i2]) ; $i2++) { 
							?>
							<p><?php echo $etape[$i]['ingredients'][$i2]['ing'].": ".$etape[$i]['ingredients'][$i2]['quant']." ".$etape[$i]['ingredients'][$i2]['dose']?></p>
							<?php
						}
					?>
				</div>
				<p class="decal"><?php echo $etape[$i]['description'] ?></p>	
			</div>
		<?php } ?>
	</div>
	<div class="formCom">
		<h2 >Commentaire</h2>
		<form action="<?php echo(WEBROOT."controlerCom/ajout") ?>" method="post">
			<label>Nom</label>
			<input type="text" name="name"></input>
			<label>Mail</label>
			<input type="text" name="mail"></input>
			<label>Note</label>
			<select name="note">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select><br/>
			<label>Commentaire</label><br/>
			<textarea class="texta" name="com"></textarea><br/>
			<input type="hidden" value="<?php echo $recette[0]['id'];?>" name="id"></input>
			<input type="submit"></input>
		</form>
	</div>
	<div>
		<?php
			for ($i=0; isset($com2[$i]) ; $i++) { ?>
				<div class="com">
					<p class="p3">Nom: <?php echo $com2[$i]['pseudo'] ?></p>
					<p class="p3">Mail: <?php echo $com2[$i]['mail'] ?></p>
					<p class="p3">Note: <?php echo $com2[$i]['note'] ?></p>
					<p>Commentaire: <br/><?php echo $com2[$i]['com'] ?></p>
				</div>
			<?php }?>
	</div>
</div>