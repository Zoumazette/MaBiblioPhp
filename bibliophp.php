<?php

/* TRAITEMENT DES CHAÎNES DE CARACTERES */


# on supprime : majuscules ; / ? : @ & = + $ , . ! ~ * ( ) les espaces multiples et les underscore
function nettoyerChaine($string)
{
    $string = strtolower($string);
    $string = preg_replace("/[^a-z0-9_'\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", " ", $string);
    return $string;
}
# fonction remplace les espaces " " par des - et enlève les caractères spéciaux
function nettoyer($string) {
    $string = str_replace(' ', '-', $string); // Remplace les espaces par des tirets.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // efface les caractères spéciaux.
}

# fonction remplace les espaces " " par des - 
function slug($z){
    $z = strtolower($z);
    $z = preg_replace('/[^a-z0-9 -]+/', '', $z);
    $z = str_replace(' ', '-', $z);
    return trim($z, '-');
}