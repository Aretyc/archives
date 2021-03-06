
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
<main >
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
                <h1>Kwadratowa</h1>

<canvas id="myCanvas" width="600" height="600" style="border:1px solid #d3d3d3;" >
Your browser does not support the HTML5 canvas tag.</canvas>
<div class="center"> 
    <div class="column"
    <p>kwadratowa : f(x)=ax<sup>2</sup>+bx+c a&#8800;0</p>

    <p>podaj a: </br> <input type="text"  id='a' name="a" value="1"></p>
    <p>podaj b: </br> <input type="text" id='b' name="b" value="0"></p>
    <p>podaj c: </br> <input type="text" id='c' name="c" value="0"></p>
    <button onclick="rysuj()">rysuj</button>
    <p>właściwości funkcji: </p>
        <div id="wlasciwosci">
                
        </div>
    </div>
</div >

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



// wykres funkcji kwadratowej 
  

function rysuj(){
var a = document.getElementById('a');
var b = document.getElementById('b');
var c = document.getElementById('c');
blad(a,b,c);
czysc(a,b,c);
//console.log(blad(a,b,c));



if(blad(a,b,c)==1);
{
    a=a.value;
    b=b.value;
    c=c.value;

/*

    a=parseFloat(a);
    b=parseFloat(b);
    c=parseFloat(c);
*/
    if(isNaN(a)||isNaN(b)||isNaN(c)){}
    else
    {
    var y=0;
        for(var i=-300; i<300; i+=0.005)
        {
        ctx.beginPath();
        y=(a*(i)*(i))+(b*(i))+c;
        ctx.fillRect(i*skala,y*skala*-1,2,2);
        ctx.stroke();
         }
  if(isNaN(a)||isNaN(b)||isNaN(c)){}
  else {wlasciwosci(a,b,c);}

}
}   
}
  



function czysc(a,b,c)
{
            a.style.boxShadow="";
            b.style.boxShadow="";
            c.style.boxShadow="";
            a.style.backgroundColor='';
            b.style.backgroundColor='';
            c.style.backgroundColor='';
            a.style.border="";
            b.style.border="";
            c.style.border="";
}

function blad(a,b,c)   // sprzwdza czy padane wartosci są poprawne
{
var d=a.value;
var e=b.value;
var f=c.value;
    console.log(d.length);

    if(isNaN(d)||isNaN(e)||isNaN(f)||d==0)             
    {

        if(isNaN(d)||d==0)
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
     if(isNaN(f))
        {
            c.style.boxShadow="0 0 10px red";
            c.style.backgroundColor='rgb(230, 164, 159)';
            c.style.border= "2px solid red";
        }  
        console.log(0);     


}
else{
    return 1;
}
}



function wlasciwosci(a,b,c)
{
// właściwości funkcji 

var wl=document.getElementById('wlasciwosci');
var wypisz=0;

var delta=b*b-(4*a*c);
wypisz='delta: '+delta+'</br>';

if(delta<0) wypisz+='brak miejsc zerowych';

if(delta==0){
    var x0=(-1*b)/2*a;
    wypisz+='x0: '+x0+'</br>';
}
if(delta>0){
    var x1=((-1*b)-Math.sqrt(delta))/(2*a);
    var x2=((-1*b)+Math.sqrt(delta))/(2*a);
   wypisz+='x1: '+x1+'</br>'+'x2: '+x2;
}
var p=(-1*b)/(2*a);
var q=(-1*delta)/(4*a);

wl.innerHTML=wypisz;


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
