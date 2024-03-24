<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome');

if (file_exists('lista.txt')) {
    $texto = file_get_contents ('lista.txt');
    $texto .= "\n".$nome;
    file_put_contents ('lista.txt', $texto);
} else {
    $texto = file_get_contents ('lista.txt');
    $texto .= $nome;
    file_put_contents ('lista.txt', $texto);
}

header("Location: index.php");
exit; 

?>



