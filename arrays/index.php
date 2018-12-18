<?php
$kasutajad = array();

$kasutajad[] = 'alice';
$kasutajad[] = 'bob';

array_push($kasutajad,'lucy');

foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}