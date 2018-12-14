<?php
header('refresh: 1');
// for
/*
 * for($jmn = alg: $jmn <= lopp; $jmn++){
 *      tegevused mis toimuvad nii kaua
 *      kui jmn vääärtus ei ole lõppväärtust
 *      saavutanud
 * }
 * */
?>
<style>
    table, tr, td{
        width: 300px;
        height: 80px;
        border: solid 3px black;
        border-collapse: collapse;
    }
    td{
        width: 150px;
    }
</style>
<?php
echo '<h5>Ülesanne 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
        echo '<tr>';
            $varv ='#';
            for($kord = 1; $kord <= 6; $kord++){
                $varv = $varv.dechex(rand(0, 15));
            }
            for($veeruNumber = 1;  $veeruNumber <= 5; $veeruNumber++) {
                echo '<td style="background: '.$varv.'">&nbsp;</td>';
           }
        echo '</tr>';
    }
echo '</table>';