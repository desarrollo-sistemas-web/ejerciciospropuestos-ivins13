<?php

// Escribe una función llamada "mayorDelArreglo" que reciba un arreglo de números y devuelva el mayor número que contiene.
// Si el arreglo está vacío la función deberá devolver -1.


// Aquí tu código
function mayorDelArreglo ($arreglo){
if ($arreglo == []) {
    echo "el mayor es:";
    return -1;
} else {
    return max($arreglo);
}
}



// TESTS
assert(mayorDelArreglo([1, 2, 3, 4, 5]) == 5);
assert(mayorDelArreglo([5, 4, 3, 2, 1]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5, 5]) == 5);
assert(mayorDelArreglo([]) == -1);