<?php
$pacientes=array('Joana' => 20,'Rui'=>25, 'Ana'=>30 );
echo "Idade do paciente Joana " .$pacientes['Joana'] . " anos.";
echo "<br><br>";
foreach ($pacientes as $nome => $idade) {
echo "o paciente ".$nome . " tem ". $idade. " anos.<br> <br>";
}
?>