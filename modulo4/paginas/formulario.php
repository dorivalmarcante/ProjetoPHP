<?php

session_start();

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso']='';
}

?>

<form method="POST" action="paginas/recebedor.php">
    <label>
        <h3>Exemplo de Formulário com POST (Voce nao vê as informações na URL):</h3>
        <br/>
    </label>
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>
    <label>
        E-mail:
        <br/>
        <input type="text" name="email" />
    </label>
    <br/>
    <br/>
    <input type="submit" value="Enviar" />
</form>
<br/>
<hr/>
<br/>
<form method="GET" action="paginas/recebedor.php">
    <label>
        <h3>Exemplo de Formulário com GET (Você vê as informações na URL):</h3>
        <br/>
    </label>
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>
    <label>
        E-mail:
        <br/>
        <input type="text" name="email" />
    </label>
    <br/>
    <br/>
    <input type="submit" value="Enviar" />
</form>
<br/>
<hr/>
<br/>