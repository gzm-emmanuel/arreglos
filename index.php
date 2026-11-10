<?php
$numeros = array();
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}

echo "<p><strong>Arreglo:</strong> " . implode(', ', $numeros) . "</p>";

if (isset($_POST['mostrar_mayores'])) {
    $copia = $numeros;
    rsort($copia); 
    $tres_mayores = array_slice($copia, 0, 3); 
    
    echo "<p><strong>Los 3 números más grandes son:</strong> " . implode(', ', $tres_mayores) . "</p>";
}
?>

<form method="POST">
    <button type="submit" name="mostrar_mayores">Mostrar 3 numeros mas grandes</button>
</form>