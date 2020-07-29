function pokaz ()
 {
	 var size = document.getElementById("size").value;
	 var title = document.getElementById("title").value;
	 document.getElementById("newtitle").innerHTML='<font size="'+ size +'">'+ title +'</font>';
	 
	 
	 var data = document.getElementById("data").value;
	 document.getElementById("newdata").innerHTML='Data: <b>'+ data +'</b>';
	 
	 var img = document.getElementById("obrazek").value;
	 document.getElementById("newimg").innerHTML='<img src="'+ img +'.png" width="100%" height="100%"></img>';
	 
	 var wiadomosc = document.getElementById("opis").value;
	 document.getElementById("newopis").innerHTML=wiadomosc;
	 
	 var wiadomosc ='<div id="newwiecejnad"><a href="wydarzenia/zagrajmyrazem/zagrajmyrazem.html"><div id="newwiecej"><img src="images/mid/stronaglowna/wiecej.png"/></div></a></div>';
	 document.getElementById("newwiecej").innerHTML=wiadomosc;
	
 }
 