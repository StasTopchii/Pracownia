<?php 

srand((double)microtime()*1000000); 

for ($i=1;$i<=26;$i++) 

{ 

$wypadlo=rand(1,6); 

echo("rzut nr $i:  "); 

echo("<b>$wypadlo</b><br>"); 

} 
?> 
