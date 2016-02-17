function liste() {
		var form5 = document.getElementById("list");
		var quantite = document.getElementById("quantite").value;

  		// console.log(form5[form5.selectedIndex].value); // get value
  		// console.log(form5[form5.selectedIndex].id); // get id

  		// console.log(document.querySelector('li'));
  		console.log(document.querySelector('li[id*="'+form5[form5.selectedIndex].id+'"]'));
  		if(document.querySelector('li[id*="'+form5[form5.selectedIndex].id+'"]') == null && quantite > 0){
	  		$("<li id='"+form5[form5.selectedIndex].id+"' name='"+quantite+"' >"+form5[form5.selectedIndex].value+": "+quantite+" </li>").appendTo($('#list_ingredient > ul'));
	  	}
	  	else if(document.querySelector('li[id*="'+form5[form5.selectedIndex].id+'"]') != null){
	  		var element = document.querySelector('li[id*="'+form5[form5.selectedIndex].id+'"]');
	  		var total = parseInt(element.getAttribute("name")) + parseInt(quantite);
	  		if(total <= 0){
	  			$( 'li[id*="'+form5[form5.selectedIndex].id+'"]').remove();
	  		}
	  		else if(total >= 0){
	  			$( 'li[id*="'+form5[form5.selectedIndex].id+'"]' ).replaceWith( "<li id='"+form5[form5.selectedIndex].id+"' name='"+total+"' >"+form5[form5.selectedIndex].value+": "+total+" </li>" );
	  		}
	  		
	  		console.log(total);
	  	}
	}