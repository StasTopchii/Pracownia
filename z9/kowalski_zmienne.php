<?php 

echo("twoje IP= "); 

echo($_SERVER["REMOTE_ADDR"]); 

echo ("<br>"); 

echo("twoje port= ");  

echo($_SERVER["REMOTE_PORT"]); 

echo ("<br>"); 

echo("twoja przeglądarka= "); 

echo($_SERVER["HTTP_USER_AGENT"]); 

?> 