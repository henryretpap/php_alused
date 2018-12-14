<?php
/**
 * Created by PhpStorm.
 * User: henry.retpap
 * Date: 13.12.2018
 * Time: 13:08
 */
// muutujate defineerimine
// $muutujaNimi = väärtus;
$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;
// väljastame muutujate väärtusec koos selgitustega
echo 'Täisarv'.$taisArv.'<br>';
echo 'Reaalarv'.$reaalArv.'<br>';
echo 'Sõne'.$sone.'<br>';
echo 'True'.$toevaartusTrue.'<br>';
echo 'False'.$toevaartusFalse.'<br>';
echo '<hr>';
//tüübikontroll
echo gettype($sone);
echo '<br>';
$summa = $sone + $sone;
settype($summa,  'string');
echo gettype($summa);
echo 'Summa = '.$umma.'<br>';




