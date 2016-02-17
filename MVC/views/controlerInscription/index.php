<script language="javascript"> 
	
</script> 	

<div class="content">
	<div class="contentIngredient">
		<h3 class="titleIngrdient">Ingredients</h3>

		<div class="formIngredients" NAME="form5">
			<table class="table" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<label>Ingredient</label>
					</td>
					<td>
						<select id="list">
							<?php for ($i = 0; isset($ingredients[$i]); $i++) { ?>
							<option value="<?php echo $ingredients[$i]; ?>" id="<?php echo $id[$i]; ?>" ><?php echo $ingredients[$i]; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Quantiter</label>
					</td>
					<td>
						<input type="number" id="quantite" />
					</td>
				</tr>
			</table>
			<input type="button" value="Ajouter Ingredients" onClick="liste()" min="0"></input>		
		</div>
	</div>

	<div id="list_ingredient">
		<ul>

    	</ul>
	</div>
</div>
