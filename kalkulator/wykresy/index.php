
<!-- 
	// oparte na php 7.0.9 
	// html 5 
	// css 3 
-->

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>klakulator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
        <link href="favicon.ico" rel="icon" type="image/x-icon" />
	</head>
<body>
 <header>
<nav> <!-- menu -->
<ul>
    

    <li><a href="http://vstudio.szczecin.pl/kalkulator">prosty</a></li>
    <li><a href="index.php">funkcje i wykresy</a></li>
</ul>
</nav>
</header>
<main>
		<div id="nav_2">
			<ul>
				<li><a href="liniowa.php">liniowa</a></li>
				<li><a href="kwadratowa.php">kwadratowa</a></li>
				<li><a href="wymierna.php">wymierna</a></li>
				<li><a href="sin.php">sinus</a></li>
				<li><a href="cos.php">cosinus</a></li>
				<li><a href="tg.php">tangens</a></li>
				<li><a href="ctg.php">cotangens</a></li>
			</ul>
			</div>
			<div id='chart'>	
<h1>Liniowa</h1>


<canvas id="myCanvas" width="600" height="600" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<div class='center'>
    <div class='column'>
        <p>funkcja liniowa: y=ax+b</p>

        <p>podaj a: </br> <input type="text"  id='a' name="a" value="1"></p>
        <p>podaj b: </br> <input type="text" id='b' name="b" value="0"></p>
        <button onclick="rysuj()">rysuj</button>
    </div>    
</div>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
var width=600;
var height=600;
// oś y
ctx.moveTo(width/2,0);
ctx.lineTo(height/2,600);
// oś x
ctx.moveTo(0,300);
ctx.lineTo(800,300);

ctx.stroke();

// osie y
ctx.translate(width/2, height/2);
for(var i=-380; i<400; i+=20)
{
    ctx.beginPath();
    ctx.lineWidth=1/5;
    ctx.moveTo(i,-300);
    ctx.lineTo(i,300);
    ctx.stroke();
}

for(var i=-280; i<300; i+=20)
{
    ctx.beginPath();
    ctx.moveTo(-400,i);
    ctx.lineTo(400,i);
    ctx.stroke();
}
//cyfry pionowo
for(var i=0; i>-15; i-- )
ctx.fillText(i*-1,2,-i*-20);
for(var i=1; i<15; i++ )
ctx.fillText(i*-1,2,-i*-20);
// cyfry poziomo 
for(var i=-1; i>-20; i-- )
{
if(i>-10)ctx.fillText(i,(-i*-20)-10,-2);
if(i<=-10)ctx.fillText(i,(-i*-20)-15,-2);
}
for(var i=1; i<20; i++ )
{
if(i>-10)ctx.fillText(i,(-i*-20),-2);
if(i<=-10)ctx.fillText(i,(-i*-20),-2);
}

// wykres finkcji liniowej 
  

function rysuj(){
var a = document.getElementById('a');
var b = document.getElementById('b');
czysc(a,b);
blad(a,b);
a=a.value;
b=b.value;
/*
a=parseFloat(a);
b=parseFloat(b);
*/

a*=-1;
b*=-1;

var y=0;

  ctx.beginPath();
    ctx.lineWidth=1;
    ctx.moveTo(-300, y=(a*(-300)+(b*20)));
    ctx.lineTo(300,y=a*(300)+(b*20));
    ctx.stroke();
}

function czysc(a,b)
{
            a.style.boxShadow="";
            b.style.boxShadow="";
            a.style.backgroundColor='';
            b.style.backgroundColor='';
            a.style.border="";
            b.style.border="";

}

function blad(a,b)   // sprzwdza czy padane wartosci są poprawne
{
var d=a.value;
var e=b.value;


    if(isNaN(d)||isNaN(e))             
    {

        if(isNaN(d)||a==0)
        {
             a.style.boxShadow="0 0 10px red";
             a.style.backgroundColor='rgb(230, 164, 159)';
             a.style.border= "2px solid red";
          
        }   
        if(isNaN(e))
        {
            b.style.boxShadow="0 0 10px red";
            b.style.backgroundColor='rgb(230, 164, 159)';
            b.style.border= "2px solid red";
        }
  


}
else{
    return 1;
}
}



</script>
	</div>	
</main>
<footer>
    Made by Szymon Cytera &copy;
    <?php
    echo date('Y')
    ?>

</footer>

</body>
</html>
