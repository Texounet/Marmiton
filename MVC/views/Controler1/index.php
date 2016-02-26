<?php 
for ($i = 0; isset($nom[$i]); $i++) { ?>
	<a href="<?php echo WEBROOT; ?>controler1/view/<?php echo $id[$i]; ?> "> <?php echo($nom[$i])?> </a><br/>
<?php } ?>
	<a href="<?php echo WEBROOT; ?>controlerRecette/index">Ajouter une recette</a>
