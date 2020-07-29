function pokaz()
{
     var title = document.getElementById("titlee").value;
	 document.getElementById("newtitle").innerHTML='<font size="5px">'+ title +'</font>';
	 
	 document.getElementById("newdata").innerHTML='Data: <b>!!!DATA!!!</b>';
	 
	 var img = document.getElementById("folder").value;
	 document.getElementById("newimg").innerHTML='<img src="'+ img +'.png" width="100%" height="100%"></img>';
	 
	 var wiadomosc = document.getElementById("opis-krotki").value;
	 document.getElementById("newopis").innerHTML=wiadomosc;
	 
	 var wiadomosc ='<div id="newwiecejnad"><a href="wydarzenia/zagrajmyrazem/zagrajmyrazem.html"><div id="newwiecej"><img src="images/mid/stronaglowna/wiecej.png"/></div></a></div>';
	 document.getElementById("newwiecej").innerHTML=wiadomosc;
}