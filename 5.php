<?php
$pessoa['nome']='Maria da silva';
$pessoa['rua']='São João';
$pessoa['bairro']='Bairro lindo da cidade';
$pessoa['cidade']='uma cidade';
foreach ($pessoa as $dados) {
	echo $dados;
	echo "<br>";
}
?>