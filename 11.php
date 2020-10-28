<?php
$carros=array(
'punto' =>array(
'cor'=>'azul',
'potencia'=>'1.0',
'opcionais'=>'ar condi.'
),
'corsa' =>array(
'cor'=>'cinza',
'potencia'=>'1.3',
'opcionais'=>'mp3'
),
'golf' =>array(
'cor'=>'branco',
'potencia'=>'1.0',
'opcionais'=>'metalica'
)
 );
echo $carros['punto']['opcionais'];
foreach ($carros as $modelos => $carro) {
echo "<h1>".$modelos. '</h1>';
foreach ($carro as $chave => $detalhe) {
	echo "<b>".$chave. "</b>";
}
}
?>