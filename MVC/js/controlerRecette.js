//Ajouter un ingredient
function add_ing(){
	var ing = document.getElementById("ingredients").value;
	var qua = document.getElementById("id_Tingredients").value;

	var test = document.getElementById(ing+"_"+qua);
	if(test == null)
		$("<li id='"+ing+"_"+qua+"'>"+ing+" "+qua+"<button onClick='delete_ing("+'"'+ing+"_"+qua+'"'+")'>Supprimer</button><input type='hidden' name='ing[]' value='"+ing+"_"+qua+"'></input></li>").appendTo($('#list_ingredient > ul'));
}

//Enlever un ingredient
function delete_ing(id){
	var element = document.getElementById(id);
	element.parentNode.removeChild(element);	
}

//Afficher quantiter cellons l'ingredient
function getQuantiter(){

	//Declaration des valeur pour les quantite
	var liquide = ["Litre", "Décilitres", "Centilitres", "Millilitres", "Cuilliere"];
	var Solide = ["Kilogramme", "Hectogramme", "Décagramme", "Gramme", "Cuilliere"];

	//recuperation du type d'ingredients
	var element = document.getElementById("ing");

	var value = element.value.split("_")

	//Selection des valeurs
	var table = [];
	if (value[1] == 1)
		table = liquide
	else
		table = Solide

	//Ajoute des valeurs
	var str = "";
	for (var i = table.length - 1; i >= 0; i--) {
		str = str + "<option value='"+table[i]+"' id='"+i+"'>"+table[i]+"</option>"
	};
	$('#dosse').html(str);
	// $(str).appendTo($('#dosse'));

	//supprimer les text temporaire
	supTmp("txt_tmp1");
}

//suprimer les element temporaire
function supTmp(id){
	var tmp = document.getElementById(id);
	if(tmp != null)
		tmp.parentNode.removeChild(tmp);
}

//Ajouter un ingredient
function add_ing2(){

	var ing = document.getElementById("ing").value;
	var qua = document.getElementById("qua").value;
	var dos = document.getElementById("dosse").value;
	if(ing == "--selectionner ingredients--" || qua == 0 || dos == "--Selectionner une dose--"){
		alert("Rempliser corectement les champs svp.");
	}
	else{
		var tst = ing.split("_");

		var test = document.getElementById(ing);
		if(test == null && qua > 0)
			$("<li id='"+ing+"' value='"+qua+"'>"+tst[0]+" "+qua+" "+dos+"<button onClick='delete_ing("+'"'+ing+'"'+")'>Supprimer</button><input type='hidden' name='ing[]' value='"+ing+"_"+qua+"_"+dos+"'></input></li>").appendTo($('#list_ingredient > ul'));
		else{
			var val = parseInt(test.value) + parseInt(qua);
			supTmp(ing);
			if(val > 0)
				$("<li id='"+ing+"' value='"+val+"'>"+tst[0]+" "+val+" "+dos+"<button onClick='delete_ing("+'"'+ing+'"'+")'>Supprimer</button><input type='hidden' name='ing[]' value='"+ing+"_"+val+"_"+dos+"'></input></li>").appendTo($('#list_ingredient > ul'));
		}
	}
}
//Passer en desebel
function choix(){
	document.getElementById("valide").disabled = false;
	supTmp("sup");
}

//Ajouter un ingredient
function add_tag(){
	var tag = document.getElementById("tag").value;

	var test = document.getElementById(tag);
	if(test == null)
		$("<li id='"+tag+"'>"+tag+"<button onClick='delete_ing("+'"'+tag+'"'+")'>Supprimer</button><input type='hidden' name='tag[]' value='"+tag+"'></input></li>").appendTo($('#list_tag > ul'));
}