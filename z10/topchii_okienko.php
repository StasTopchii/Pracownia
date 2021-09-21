<form action="topchii_okienko.php" method="get">  

1: <input name=licz1> <br> 

2: <input name=licz2> <br> 

<input type=submit value=ok> 

</form><br> 

<?php 

echo $_GET["licz1"]+$_GET["licz2"]; 

?>  