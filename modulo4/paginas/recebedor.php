<?php
session_start();

require('header.php');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if ($nome) {
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);
    echo 'Enviado pelo POST<br/><br/>';
    echo 'NOME: '.$nome.'<br/>';
    echo 'IDADE: '.$idade.'<br/>';
    echo 'EMAIL: '.$email.'<br/><br/>';
} else {
    $_SESSION['aviso'] = 'Preencha os itens de POST corretamente';
    echo 'NÃO ENVIOU NADA NO POST!<br/><br/>';
}

$nome = filter_input(INPUT_GET, 'nome');
$email = filter_input(INPUT_GET, 'email');
$idade = filter_input(INPUT_GET, 'idade');

if ($nome) {
    echo 'Enviado pelo GET<br/><br/>';
    echo 'NOME: '.$nome.'<br/>';
    echo 'IDADE: '.$idade.'<br/>';
    echo 'EMAIL: '.$email.'<br/><br/>';
} else {
    $_SESSION['aviso'] = 'Preencha os itens de GET corretamente';
    echo 'NÃO ENVIOU NADA NO GET!<br/><br/>';
}
