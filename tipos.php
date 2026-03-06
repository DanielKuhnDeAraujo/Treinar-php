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
?>