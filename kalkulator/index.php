<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>klakulator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
        <link href="wykresy/favicon.ico" rel="icon" type="image/x-icon" />
	</head>
<body>
 <header>

<nav> <!-- menu -->
<ul>
    

    <li><a href="index.php">prosty</a></li>
    <li><a href="wykresy/">funkcje i wykresy</a></li>
</ul>
</nav>
</header>
<main>
    <div  id="pole1">
            <div id='znak'>

                
            </div>
            <form id='form1' name="form1">
                <p id='blad'>Możesz wprowadzać tylko liczby<br/> i pierwiastkować liczby dodatnie!!! </p>
                <input id="inp0" type="text" onclick="activ(0)" name="dzialanie" value="0">
            </form> 

            <div id='procent'></div>
    </div>
    
    <div id="pole2">
    <div id="cyfry">



<?php
// załączenie skryptu który wypisuje liczby 1-9
include 'skrypt1.php'
?>

<div class="cyfra" onclick="przecinek()"><p>,</p>
</div>

</div>

<div  id="operatory">
  <div class="operator" onclick="main('form1','/' )"><p>/</p></div> 
  <div class="operator" onclick="main('form1','*' )"><p>*</p></div> 
  <div class="operator" onclick="main('form1','-')"><p>-</p></div> 
  <div class="operator" onclick="main('form1','+' )"><p>+</p></div>
  </div>
  <div  id="operatory">
  <div class="operator" id="procenta" onclick="procenty('dp')"><p>%</p></div> 
  <div class="operator" onclick="main(null,'pierwiastek')"><p>&#8730;</p></div> 
  <div class="operator" id="rowne" onclick="wynik()" ><p>=</p></div>  
</div>


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

