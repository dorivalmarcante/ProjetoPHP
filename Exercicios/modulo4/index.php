<?php
session_start();
if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h3>Ola, '.$nome.'. O Cookie ainda está ativo!</h3>';
}

?>

<form method="POST" action="recebedor.php">
    <label>
    <h3>Teste de gravação e exclusão de Cookie</h3>
    </label>
    <label>
    Qual seu nome?
    </label>
    <br/><br/>
    <input type="text" name="nome">
    <br/>
    <br/>
    <input type="submit" name="Salvar">
</form>
<hr/>
<form method="POST" action="lista.php">
    <label>
    <h3>Teste de criação, inclusão de conteudo e leitura de arquivo externo</h3>
    </label>
    <label>
    Inclua seu nome na lista:
    </label>
    <br/><br/>
    <input type="text" name="nome">
    <br/>
    <br/>
    <input type="submit" name="incluir" value="Incluir">
</form>

<?php 
if (file_exists('lista.txt')) {
    $texto = file_get_contents('lista.txt');
    $array = explode("\n", $texto);
    echo '<ul>';
    foreach($array as $item) {
        echo '<li>'.$item.'</li>';
    }
}
?>
