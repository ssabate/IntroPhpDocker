<?php
function valorReferencia($v){

    foreach($v as $i) {
        $i="holaaaa\n";
    }

}

$ar=array();
$ar[0]=12;
$ar[1]="como estas";
print_r($ar);
valorReferencia($ar);
print_r($ar);
