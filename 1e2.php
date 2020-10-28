<?php
$cores= array('vermelho', 'azul', 'verde', 'amarelo');
echo $cores[0];
echo "<br>";
echo $cores[1];
echo "<br>";
echo $cores[2];
echo "<br>";
echo $cores[3];

$a =array('tesla', 2000, 3.0, 'bmw', 'fiat');
echo $a[1]; //resuldado=2000
echo "<br>";
$a[1]=2020; // a posição 1 tem agora o valor 2020
echo "<br>";
echo $a[1];
$a[]="vila das aves"; //adicionar um novo item ao array
echo "<br>";
$a[]="aedah";//adicionar um novo item ao array
echo "<br>";
foreach ($a as $item ) {
	echo $item;
	echo "  ";
}
?>