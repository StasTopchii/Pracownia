<?php
if(isset($_GET['sub']))
{
$k=$_GET['ik'];
$s=$_GET['sk'];
$u=$_GET['users'];
$tab;
$plik = fopen('tekst.txt','a');
for($i=1;$i<=$u;$i++){
    for($ii=0;$ii<$k;$ii++){
        $wypadlo=rand(1,$s);
        $tab[$ii]=$wypadlo;
        
    }
    $wynik="Gracz ".$i." rzycil ".array_sum($tab)."\r";
    fwrite($plik,$wynik);
    
}
}
?>
<form action="" method="get">
Podaj ile ma byc kostek<input type="number" name="ik"><br />
Podaj ile ma scianek na kostce<input type="number" name="sk"><br />
Podaj ilosc graczy<input type="number" name="users"><br />
<input type="submit" name="sub" value="Losuj">
</form>