<?php 

//inicjalizacja generatora liczb losowych 

//na podstawie aktualnego czasu w milisekundach 

srand((double)microtime()*1000000); 

$wypadlo=rand(1,2);  #wylosuj liczby naturalne od 1 do 2 

/* 

sprawdzenie wyniku 

przyjmujemy arbitralnie  

1 to orzeł 

2 to reszka 

*/ 
if ($wypadlo==1)
{
    echo('wypadł orzeł');
}
else 
{
    echo('wypadła reszka');
} 

?> 