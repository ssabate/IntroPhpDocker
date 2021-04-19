<?php
function saludo(string $param):string{

    return trim($param);

}

$f = fopen('php://stdin', 'r');
$ar=array();
$ar[0]=12;
$ar[1]="como estas";
print_r($ar);
print_r($_GET);
$line = fgets($f);
echo substr($line, 0, strlen($line));
foreach($ar as $i) {
    echo $i."\n";
}
$tot=$line;
while (substr($line, 0, strlen($line)-1)!="fin") {
    $line=fgets($f);
    $tot .= $line;    echo $tot;
}

fclose($f);

printf("%s", saludo("hola      "));
