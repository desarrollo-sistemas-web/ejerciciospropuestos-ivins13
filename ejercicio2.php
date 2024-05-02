<?php

// Desarrolla una función con el nombre "perimetroTriángulo" para calcular el perímetro de un triángulo.
// Ten en cuenta que primero hay que validar que las medidas sean correctas para un triángulo. 🤓
// En caso de que no sea un triángulo, la función deberá devolver -1.


// Aquí tu código
function perimetroTriangulo ($L1 , $L2, $L3) {
   if ($L1+ $L2 > $L3 && $L1 + $L3 > $L2 && $L2 + $L3 > $L1) {
    echo "El perimetro del triangulo es:";
    echo $L1 + $L2 + $L3 . "<br>";
    return $L1 + $L2 + $L3;
   } else{
    return -1;
   }
    
}


// TESTS
assert(perimetroTriangulo(1, 1, 1) == 3);
assert(perimetroTriangulo(2, 2, 2) == 6);
assert(perimetroTriangulo(2, 3, 4) == 9);
assert(perimetroTriangulo(3, 4, 5) == 12);
assert(perimetroTriangulo(1, 1, 3) == -1);
