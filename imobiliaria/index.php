<?php 

include 'classes/Terreno.php';

//obtendo os dados do formulario
// $areaMinima = $_POST['area_minima'];
$areaMinina = 1000;

//instanciando objetos
$terreno1 = new Terreno(100, 10, 50);
$terreno2 = new Terreno(110, 20, 50);
$terreno3 = new Terreno(120, 50, 50);

//criando lista(array) e atribuindo os objetos
$listaTerreno = [];
$listaTerreno[0] = $terreno1;
$listaTerreno[1] = $terreno2;
$listaTerreno[2] = $terreno3;

foreach ($listaTerreno as $t) {
  if ($t->calcularArea() >= $areaMinina) {
    echo $t->calcularArea() . "\n";
  }
}
?>