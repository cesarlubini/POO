<?php 

include 'classes/Cadeira.php';

//Criando um objeto
$cadeira1 = new Cadeira('cinza','couro',true);
$cadeira2 = new Cadeira('preta','plastico',false);

// var_dump($cadeira1); //provando que ele realmente é um objeto
// var_dump($cadeira2);

$cadeira1->sentar();
?>