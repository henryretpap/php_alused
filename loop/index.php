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
        text-align: center;
    }
</style>
<?php
echo '<h5> Ülesanne 3</h5>';
echo '<table>';
    echo '<tr>';
    for($arv1 = 1; $arv1 <=10; $arv1++) {
        $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
        echo '<th style="background: deepskyblue">'.$txt . '</th>';
    }
    echo '</tr>';
    for($arv1 = 1; $arv1 <= 10; $arv1++){
        echo'<tr>';
                echo'<th style="background: coral">'.$arv1.'</th>';
                for($arv2 = 1; $arv2 <= 10; $arv2++){
                    echo '<td>';
                    echo ($arv1 * $arv2);
                    echo '</td>';
            }
         echo '</tr>';
    }
echo '</table>';