<?php 

 function linia($kolor,$szerokosc="57%") 
 { 
    for($i=0;$i<=10;$i++){
        echo('<hr style="color:'.$kolor.';background:'.$kolor.';border:0px;height:1px;width:'.$szerokosc.';" />');
    } 
 } 
 linia('green');
 linia('blue');
 linia('red');
 linia('yellow');
 linia('gold');
?> 