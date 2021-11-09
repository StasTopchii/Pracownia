<?php 

srand((double)microtime()*1000000); 

for ($i=1;$i<=1000;$i++) 

{ 

$wypadlo=rand(1,2); 
if($wypadlo==1){
    $reszka++;
}
if($wypadlo==2){
    $orzel++;
}
} 
echo("Reszka wypadla <b>$reszka</b> razy<br>"); 
echo("Orzel wypadl <b>$orzel</b> raz<br>"); 
?> 