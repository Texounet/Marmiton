<?php 

for ($i = 0; isset($nom[$i]); $i++) { ?>
	<a class='index' href="<?php echo WEBROOT; ?>controlerView/view/<?php echo $id[$i]; ?> ">
		<div class="div_index">
		<h4><?php echo($nom[$i])?> </h4>
		<p>Createur: <?php echo($pseudo[$i])?></p>
		<p>Temps: <?php echo($temps[$i])?> minutes</p>
		<p>Mail: <?php echo($mail[$i])?></p>
		</div>
	</a><br/>
<?php } ?>

<div class="div_add">
	<a class="btn btn-primary" class="add" href="<?php echo WEBROOT; ?>controlerRecette/index">Ajouter une recette</a>
</div>
	
