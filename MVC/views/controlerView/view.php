<?php
	// print_r($ing)
	// print_r($recode()ette[0]);
	// print_r($etape);
	// print_r($tag);
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
</div>