<?php

require_once("class/Estado.php");
require_once("class/Cidade.php");

$SantaCatarina = new Estado("Santa Catarina","SC");
$Parana = new Estado("Paraná","PR");

$Cidades = [];
$Cidades[] = new Cidade("Florianopolis", 500000, 300, $SantaCatarina);
$Cidades[] = new Cidade("Blumenau", 200000, 600, $SantaCatarina);
$Cidades[] = new Cidade("Foz do Iguaçu", 250000, 400, $Parana);
$Cidades[] = new Cidade("Cascavel", 380000, 500, $Parana);

foreach ($Cidades as $i => $valor)
{
    echo "\n\n------CIDADE " . $i+1 . "------\n";
    echo $valor;
}
echo "\n";


