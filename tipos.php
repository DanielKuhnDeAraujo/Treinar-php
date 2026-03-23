<?php
$bool = true;
$str1 = "texto";
$str2 = 'outro texto';
$int = 12;
function mostrarTipo($arg) {
    echo "<p> O tipo desta variável é : " . get_debug_type( $arg ). "</p>";
}

mostrarTipo($bool);
mostrarTipo($str1);
mostrarTipo($str2);
mostrarTipo($int);

if (is_int($int)) {
    $int += 4;
}
echo "<p>";
var_dump($int);
echo "</p><p>";
var_dump($str1);
echo "</p><p>";
var_dump($bool);
echo "</p>";

// If $a_bool is a string, print it out
if (is_string($bool)) {
    echo "String: $bool";
}



$action = "show_version";
$show_separadores = true;

// == É um operador que testa
// igualdade e retorna um booleano.
if ($action == "mostrar_versao") {
    echo "A versão é 1.23";
}

// isto não é necessário ...
if ($show_separadores == TRUE) {
    echo "<hr>\n";
}

// ... porque pode simplesmente ser escrito assim:
if ($show_separadores) {
    echo "<hr>\n";
}
var_dump(PHP_INT_MAX + 1);  
var_dump(PHP_INT_MIN);

try {
    intdiv(PHP_INT_MIN, -1);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}

try {
    intdiv(1, 0);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
    // eol é quebra de linha
}

?>

