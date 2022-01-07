<?php

/**
 * str_secur
 * Permet de securise une chaine de carractère
 * @param  mixed $string
 * @return string
 */
function str_secur(string $string): string
{
    return trim(htmlspecialchars($string));
}

/**
 * debug
 * Debug plu lisible des différentes variable
 * @param  mixed $var
 * @return void
 */
function debug($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
