
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

                            <h1>Sinus</h1>


<canvas id="myCanvas" width="600" height="600" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<button onclick="rysuj()">rysuj</button>

<div id="wlasciwosci">
        
</div>


<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
var width=600;
var height=600;

ctx.translate(width/2, height/2);
// oś y
ctx.moveTo(-300,0);
ctx.lineTo(300,0);
// oś x
ctx.moveTo(0,300);
ctx.lineTo(0,-300);

ctx.stroke();

// osie 
var skala=25;
var z=0;
// osie pionowe
for(var i=0; i<300; i+=skala)
{
    
    z-=skala;
    ctx.beginPath();
    ctx.lineWidth=1/5;
    ctx.moveTo(i,-300);
    ctx.lineTo(i,300);
    ctx.stroke();
}

for(var i=0; i>-300; i-=skala)
{
    
    z-=skala;
    ctx.beginPath();
    ctx.lineWidth=1/5;
    ctx.moveTo(i,-300);
    ctx.lineTo(i,300);
    ctx.stroke();
}

// osie poziome
for(var i=0; i<300; i+=skala)
{
    ctx.beginPath();
    ctx.moveTo(-400,i);
    ctx.lineTo(400,i);
    ctx.stroke();
}
for(var i=0; i>-300; i-=skala)
{
    ctx.beginPath();
    ctx.moveTo(-400,i);
    ctx.lineTo(400,i);
    ctx.stroke();
}



//cyfry pionowo
for(var i=0; i>-15; i-- )
ctx.fillText(i*-1,2,-i*-skala);
for(var i=1; i<15; i++ )
ctx.fillText(i*-1,2,-i*-skala);
// cyfry poziomo 
for(var i=-1; i>-skala; i-- )
{
if(i>-10)ctx.fillText(i,(-i*-skala)-10,-2);
if(i<=-10)ctx.fillText(i,(-i*-skala)-15,-2);
}
for(var i=1; i<skala; i++ )
{
if(i>-10)ctx.fillText(i,(-i*-skala),-2);
if(i<=-10)ctx.fillText(i,(-i*-skala),-2);
}

// wykres funkcji sinus 
  

function rysuj(){

var y=0;
 ctx.beginPath();
    for(var i=-300; i<300; i+=0.05)
    {
    y=Math.sin(i);
    ctx.fillRect(i*skala,-1*y*skala,2,2);
    }
     ctx.stroke();   
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

