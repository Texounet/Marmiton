//Ajouter un ingredient
function add_tag(){
	var tag = document.getElementById("tag").value;

	var test = document.getElementById(tag);
	if(test == null)
		$("<li id='"+tag+"'>"+tag+"<button onClick='delete_ing("+'"'+tag+'"'+")'>Supprimer</button><input type='hidden' name='tag[]' value='"+tag+"'></input></li>").appendTo($('#list_tag > ul'));
}

function delete_ing(id){
	var element = document.getElementById(id);
	element.parentNode.removeChild(element);	
}

function add_ing(){
	var ing = document.getElementById("ingredients").value;

	var test = document.getElementById(ing);
	if(test == null)
		$("<li id='"+ing+"'>"+ing+"<button onClick='delete_ing("+'"'+ing+'"'+")'>Supprimer</button><input type='hidden' name='ing[]' value='"+ing+"'></input></li>").appendTo($('#list_ingredient > ul'));
}