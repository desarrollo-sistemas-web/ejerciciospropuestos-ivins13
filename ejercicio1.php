<?php

// Desarrolla una función con el nombre "areaTriangulo" para calcular el área de un triángulo.

// Aquí tu código
function areatriangulo ($base, $altura) {
    echo "El area del triangulo es:";
    echo ($base * $altura) / 2;
    return ($base * $altura) / 2; 
}
      
   


// TESTS
assert(areaTriangulo(1, 1) == 0.5);
assert(areaTriangulo(2, 2) == 2);
assert(areaTriangulo(2, 3) == 3);