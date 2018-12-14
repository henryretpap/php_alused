<?php
// matemaatilised süsteemid
$arv1 = 42;
$arv2 = 11;

echo $arv1. ' + '.$arv2.' = '.($arv1 + $arv2).'<br>';
echo $arv1. ' - '.$arv2.' = '.($arv1 - $arv2).'<br>';
echo $arv1. ' * '.$arv2.' = '.($arv1 * $arv2).'<br>';
echo $arv1. ' / '.$arv2.' = '.($arv1 / $arv2).'<br>';
echo $arv1. ' % '.$arv2.' = '.($arv1 % $arv2).'<br>';

echo '<hr>';

echo $arv1. ' == '.$arv2.' on '.($arv1 == $arv2).'<br>';
echo $arv1. ' != '.$arv2.' on '.($arv1 != $arv2).'<br>';
echo $arv1. ' <= '.$arv2.' on '.($arv1 <= $arv2).'<br>';
echo $arv1. ' >= '.$arv2.' on '.($arv1 >= $arv2).'<br>';
echo $arv1. ' < '.$arv2.' on '.($arv1 < $arv2).'<br>';
echo $arv1. ' > '.$arv2.' on '.($arv1 > $arv2).'<br>';


// tingimuslaused
/*
*if(tingimus){
 *      tegevused, mis toimuvad siis,
 *      kui tingimus1 kehtib
 * } else if(tingimus2) {
 *      muidu, kui tingimus ei kehti, toimuvad
 *      siin kirjutatud tegevused, kui tingimus2
 *      kehtib
 * } else {
 *      muidu, kui kõik mis eelnevat kirjutatud,
 *      ei sobi, töötab see osa
 * }
 **/
echo'<h5>Ülessanne 1</h5>';
$arv = rand(0, 100);
if($arv >= 0 and $arv < 25){
    echo '<div style="color: red">'.$arv.'</div>';
} else if($arv >= 25 and $arv < 50){
    echo '<div style="color: green">'.$arv.'</div>';
} else if($arv >= 50 and $arv < 75){
    echo '<div style="color: blue">'.$arv.'</div>';
} else if($arv >= 75 and $arv < 100) {
    echo '<div style="color: orange">' . $arv . '</div>';
} else {
    echo '<div style="color: black">'.$arv.'</div>';
}