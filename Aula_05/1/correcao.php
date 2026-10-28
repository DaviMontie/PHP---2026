<?php

$monitores = []; // matriz que armazenará todos os monitores

// Leitura dos dados
for ($i = 0; $i < 5; $i++) {
    echo "\nMonitor " . ($i + 1) . ":\n";
    
    $monitor = []; // vetor associativo
    
    echo "Marca: ";
    $monitor["marca"] = trim(fgets(STDIN));
    
    echo "Cor: ";
    $monitor["cor"] = trim(fgets(STDIN));
    
    echo "Polegadas: ";
    $monitor["polegadas"] = floatval(trim(fgets(STDIN)));
    
    $monitores[] = $monitor; // adiciona na matriz
}

// Encontrar o maior monitor
$maior_monitor = $monitores[0];

foreach ($monitores as $monitor) {
    if ($monitor["polegadas"] > $maior_monitor["polegadas"]) {
        $maior_monitor = $monitor;
    }
}

// Exibir resultado
echo "\nMaior monitor:\n";
echo "Marca: " . $maior_monitor["marca"] . "\n";
echo "Cor: " . $maior_monitor["cor"] . "\n";
echo "Polegadas: " . $maior_monitor["polegadas"] . "\n";
