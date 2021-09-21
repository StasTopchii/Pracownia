<form action="z11.php" method="get">  

1: <input name=licz1> <br> 

2: <input name=licz2> <br> 

<input type=submit value=ok> 

</form><br> 

<?php 

$x1 = $_GET['licz1']+1;
$x2 = $_GET['licz2']+1;

$wynik = 1/$x1*$x1 + 1/$x2*$x2;

echo($wynik);

?> 