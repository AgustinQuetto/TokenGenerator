<?php

//Función que genera el token para sincronización
function generateToken($length = 8) {

return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

}

echo generateToken(); //devuelve el token