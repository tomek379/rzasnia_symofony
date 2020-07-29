function reset(co)
{
	var obiekt = document.getElementById(co);
	if (obiekt.style.display == 'block')
	 { 
          obiekt.style.display = 'none'; 
     }else
	 { 
          obiekt.style.display = 'block';
     } 
}
function pokazAlboUkryj(co) { 
     var obiekt = document.getElementById(co); 
     if (obiekt.style.display == 'block') { 
          obiekt.style.display = 'none'; 
     } else { 
          obiekt.style.display = 'block';
     } 
}