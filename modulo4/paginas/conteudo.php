<?php
echo 'O comando `POST` em um formulario, envia as informações internamente, enquando o comando GET faz o envio dos dados na URL da pagina.<br/>';
require('paginas/formulario.php');
echo 'Para ele mandar os dados do formulario para outro arquivo, voce tem que usar o comando action dentro de form. Do contrario, ele manda para o mesmo arquivo.<br/>';
echo 'Quando você nao define se o metodo é POST ou GET, por padrão o site assume que é um formulario GET.<br/>';
echo 'Para pegar os dados enviados em uma outra pagina, usa o comando filter_input(INPUT_POST, "nomedocampo"), atribuindo ele a uma variavel.<br/>';
echo 'Pra colocar uma condicional dupla para checar dois dados, use IF($dado1 && $dado2)<br/>';
echo 'Se preferir, pode fazer com que o Else volte para a pagina do formuario, caso o IF nao atinga o que foi pedido. Para isso, use no ELSe header("Location: index.php"); Exit;<br/>';
echo 'Isso fará com que a pagina volte para o formulario para preenchimento. O Exit no fim obriga o fomulario a encerrar qualquer execução de codigo que vier na sequencia.<br/>';
echo 'Você pode usar o comando FILTER_VALIDATE_EMAIL pra validar se o email digitado é um email. Caso nao valide, dependendo da regra de exclusão, ele apaga o que foi digitado.<br/>';
echo 'Pra limpar um campo de numero inteiro, voce usa o comando FILTER_SANITIZE_NUMBER_INT; Ele apaga tudo que nao for numero digitado no campo. Pra validar, use FILTER_VALIDATE_INT<br/>';
echo 'Caso a informação que vc queria validar ja esteja no arquivo sem necessitar de input, vc pode usar o comando filter_var($variavel, FILTRO_ESCOLHIDO).<br/>';
echo 'O Filtro FILTER_SANITIZE_SPECIAL_CHARS faz com que o campo fique sem caracteres especiais. Isso evita que alguem rode codigos maliciosos atraves do formulário.<br/>';
echo 'Existem Varios filtros, como FILTER_VALIDATE_INT, EMAIL, IP, URL e os FILTER_SANITIZE_EMAIL, STRING, SPECIAL_CHARS, URL, FLOAT, e varios outros.<br/>';
echo 'Os FILTER_VALIDATE validam o campo, ja os FILTER_SANITIZE limpam o campo deixando somente o que voce precisa.<br/>';
echo 'Todas as paginas que precisarem usar seção, elas tem que ter no inicio da pagina, o comando session_start();<br/>';
echo 'Com o comando session_start definido, as informações digitadas ficam salvas e podem ser usadas em outra pagina, desde que contenha a session_start nela também.<br/>';
echo 'Quando for fazer algum verificador da session, tem que escrever a variavel em letra maiuscula. Exemplo: if($_SESSION["aviso"]){echo $_SESSION["aviso"];}<br/>';
echo 'Lembrando que o aviso é definido antes, no recebedor dos dados do formulario. com a linha de comando: $_SESSION["aviso"]="DIGITE O AVISO AQUI!";<br/>';
echo 'É importante tambem lembrar de tirar o aviso da seção, pois senão se ele der uma vez o erro, toda vez que a pessoa atualizar a pagina, o erro volta.<br/>';
echo 'Para tirar o aviso, é só colocar que a variavel = ""; ou seja $_SESSION["aviso"]=""<br/>';
echo 'O Session é similar a um cookie. A diferença é que ele fica salvo enquanto o navegador esta aberto, e o cookie fica salvo na maquina do usuario. Mesmo que desligue o pc e o prazo do cookie esteja valido, ele permanece<br/>';
echo 'O cookie só pode ser setado antes de qualquer codigo que exiba algo na tela.<br/>';
echo 'Pra definir um cookie, você usa o comando setcookie. Sua linha de comando é setcookie("nomedocookie",$variavelquetemainformaao,time(tempoqueocookielevapraexpirar))<br/>';
echo 'Pra apagar um cookie, só setar ele com um time no passado. Exemplo: setcookie("nome","",time() -3600)<br/>';
echo 'Para ler arquivos externos, use o comando: $variavel=file_get_contents("arquivo.txt"); No lugar do arquivo, voce pode usar uma URL para pegar u marquivo externo.<br/>';
echo 'Para escrever em arquivos externos, uma das formas é usar o comando file_put_contents. Sua linha de comando é file_put_contents("nomedoarquivo.txt", $variavelcomtexto);<br/>';
echo 'Para excluir um arquivo, use o comando unlink("arquivo.txt"); Esse comando nao exclui pastas, somente arquivos.<br/>';
echo 'Pra renomear um arquivo, use o comando rename("arquivo.txt","novonome.txt"). Esse mesmo comando pode ser usado para mover o arquivo, pra isso, somente indique a pasta para onde ele ira.<br/>';
echo 'Exemplo: rename("arquivo.txt","pasta/novonome.txt"). Pra criar uma copia, use a mesma logica, porém com o comando copy. Ex: copy("arquivo.txt","pasta/novonome.txt")<br/>';
echo 'Quando for fazer upload de arquivos, voce tem que usar o metodo POST. E voce tem que colocar no <form> o codigo enctype="multipart/form-data".<br/>';
echo 'Quando é feito um upload, ele é enviado para uma pasta temporaria. Para mover o arquivo para o pasta correta, vc tem que usar o seguinte comando:<br/>';
echo 'move_uploaded_file($_FILES["arquivo"]["tmp_name"],"arquivos/".$nome); Sendo que o primeiro parametro é onde esta o arquivo na pasta temporaria, e depois onde quer que ele fique.<br/>';
echo 'no caso acima, a variavel $name foi definida antes, pra que ele mantenha o mesmo nome do arquivo. Ela ficou assim: $nome = $_FILES["arquivo"]["name"];<br/>';
echo 'Fazendo desse modo, ele usa o mesmo nome original do arquivo. Caso seja feito o upload de um arquivo com o mesmo nome, ele subistitui.<br/>';
echo 'Pra nao correr o risco de apagar o arquivo, o ideal é gerar o proprio nome do arquivo, de forma aleatoria, o que faz com que não tem risco de apagar.<br/>';
echo 'uma opção é usar na variavel nome os codigos $nome = md5(time().rand0,1000)).".jpg"; Nesse exemplo ele vai gerar um arquivo com o nome da hash md5, mais o time e mais um numero randomico entre 0 e 1000 com a extensão jpg.<br/>';
echo 'Se no caso vc só quiser receber imagens como file, use o comando in_array. Linha de comando in_array($_FILES["arquivo"]["type"], array ("image/jpeg", "image/jpg", "image/png"));<br/>';
echo 'Definindo ele em um IF, voce pode mostrar uma mensagem de erro dizendo que o arquivo não é suportado ou que o arquivo foi recebido normalmente.<br/>';
echo '<br/>';

//$texto = "Dorival Marcante";
//file_put_contents('texto.txt', $texto);
//$texto2 = file_get_contents('texto.txt');
//$texto2 .= "\nDorival Junior";
//file_put_contents('texto.txt', $texto2);
