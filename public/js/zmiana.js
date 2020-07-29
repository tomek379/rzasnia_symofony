function zmiana(liczba)

    {
		if(liczba==1)
	 document.getElementById("newwiecej").innerHTML="<img src='images/mid/stronaglowna/wiecej2.png' onmouseover='zmiana("1")' onMouseOut='zmiana("2")' />";
 else
	 document.getElementById("newwiecej").innerHTML="<img src='images/mid/stronaglowna/wiecej.png' onmouseover='zmiana("1")' onMouseOut='zmiana("2")' />";
    }
