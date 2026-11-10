<?php
$numeros = array();
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}
echo implode(', ', $numeros);
?>