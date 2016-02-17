function liste() {
		var form5 = document.getElementById("list");

  		console.log(form5[form5.selectedIndex].value); // get value
  		console.log(form5[form5.selectedIndex].id); // get id

  		console.log(document.querySelector('li'));

  		if(document.querySelector('li[id*="'+form5[form5.selectedIndex].id+'"]') == null)
	  		$("<li id='"+form5[form5.selectedIndex].id+"'>"+form5[form5.selectedIndex].value+"</li>").appendTo($('#list_ingredient > ul'));
	  	else
	  		console.log(document.querySelector('li'));
	}