<?php
header('refresh');
// tingimuslaused
/*
* switch (kontroll) {
 *      case vastus:
 *          tegevused, mis antud case puhul toimivad
 *              break;
 *          default:
 *              tegevused, mis toimuvad siis kui kõik muu
 *              ei sobi
 *              break
 * }
 * */
?>
    <style>
        div{
            width: 100px;
            height: 100px;
            border-radius: 50px;
            border: solid 1px black;
        }
    </style>
<?php
echo'<h5>Ülessanne 3</h5>';
$aktiivne = 'muu';
switch ($aktiivne){
    case 'punane':
        echo '<div style="background: red"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
    case 'kollane';
        echo '<div></div>';
        echo '<div style="background: orange"></div>';
        echo '<div></div>';
        break;
    case 'roheline';
        echo '<div></div>';
        echo '<div style="background: green"></div>';
        echo '<div></div>';
        break;
    default:
        echo '<div style="background: green"></div>';
        echo '<div style="background: orange"></div>';
        echo '<div style="background: red"></div>';
        break;

}