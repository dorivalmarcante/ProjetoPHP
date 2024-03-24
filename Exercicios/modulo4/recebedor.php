<?php
session_start();

$nome = filter_input (INPUT_POST, 'nome');
if ($nome) {
    setcookie('nome',$nome,time()+86000);
    echo '<h3>Ola, '.$nome.'</h3>';
}

?>

<a href="apagar.php">Apagar</a>