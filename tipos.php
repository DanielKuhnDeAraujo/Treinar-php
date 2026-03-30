<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



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
echo "<br>";
$octal = 011;//9
echo "<p>Octal 011 :" . $octal . "</p>";
$octal = 0o11;//9
echo "<p>Octal 0o11 :" . $octal . "</p>";
$hexa = 0x1F ;//31
echo "<p>Hexadecimal 0x1F :" . $hexa . "</p>";
$binario = 0b1010;
echo "<p>Binário 0b1010 :" . $hexa . "</p>";
$under = 1_000_000;
echo "<p>1_000_000 ignorando underlines :" . $under . "</p>";
$ibool = true;
$ibool2 = false;
$boolint  = intval($ibool);
$boolint2 = (int ) $ibool2;
echo "<p>Bool para int .</p><p>True : $boolint</p><p>False : $boolint2</p>";
echo "<h2>Testes de float para int</h2>";
function foo($value) :int { return $value; };
$floatmaior = foo(10.9);
echo "<p>10.9 : $floatmaior ; \t </p>";
$floatmenor = foo(-10.9);
echo "<p>-10.9 : $floatmenor ; \t </p>";
echo "<h2>Mais alguns casos</h2>";
echo "<p>" . foo( (0.1+0.7) *10  ) . "</p>";//Loucura do Caralho
?>


</body>
</html>
