<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[EDITAR]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem Certeza que deseja excluir?')">[EXCLUIR]</a>
            </td>
        </tr>
    <?php endforeach; ?>    
</table>

