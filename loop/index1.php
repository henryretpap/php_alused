<?php
//while
/*
 * while(tingimus){
 *      tegevused, mis toimuvbad nii kaua
 *      kui tingimus kehtib
 *}
 *
 * */
$arv = 48557812535;
$kordamine = 0;
while($arv != 0){
    $nuber = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv float = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
    if($number == 5) $kordamine++;
    echo'<hr>';
}
echo 'Number 5 esineb '.$kordamine.' korda<br>';
