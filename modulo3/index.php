<?php
echo 'A função tem como objetivo criar uma rotina de ações que podem ser feitas repetidas vezes dentro de um programa<br/>';
echo 'A sua linha de comando é: function nomedafuncao () { comandos da função }<br/>';
echo 'para chamar a função, basta colocar o nome dela e (), então fica nomedafuncao(); <br/>';
echo 'dentro dos () que vem apos o nome da função, você definir os paramentros da Função. Exemplo function nome(n1,n2) { $total=$n1+$n2;return=$total}. Pra usar a função, uso: $x=nome(1,2); para exibir, uso echo x;<br/>';
echo 'Voce pode definir o valor do parametro direto dentro do parenteses. exemplo: function nome(n1=0,n2=0)<br/>';
echo 'Voce pode ainda definir o tipo de dados que podem ser usados nesses parametros. Exemplo: function nome(int n1=0,int n2=0)<br/>';
echo 'voce pode criar no php uma função anoninma. Voce pode usar elas de dois modos principais. Usando dentro de uma variavel ou passando ela como um parametro para outra função.<br/>';
echo 'sua linha de comando é $variavel = function () { ações } - Nesse caso mostra o uso de uma função anonima dentro de uma variavel.<br/>';
echo 'Para usar esa variavel, a diferença é que no final voce tem que colocar um valor. Exemplo: $variavel(valor);<br/>';
echo 'Funções flecha ou Arrow function permite que vc crie o codigo da função em uma linha so. Ela só permite uma expressão dentro dela.<br/>';
echo 'Sua linha de comando é $variavel=fn($valor)=>$valor*10. Nesse caso ela cria a função anonima , registra o valor e faz o calculo.<br/>';
echo 'Uma função recursiva é uma função que executa ela mesma.<br/>';
echo 'sua linha de comando é function dividir($numero){$metade = $numero/2;echo $metade;if($metade>0){dividir($metade);}}dividir(100);<br/>';
echo 'no exemplo acima, ele divide o valor informado em dividir ao meio ate chegar a 0.<br/>';
echo 'para arredondar numeros, usamos a função round. No exmeplo acima, ficaria do seguinte modo: function dividir($numero){$metade = $numero/2;echo $metade;if(round($metade)>0){dividir($metade);}}dividir(100);<br/>';
echo 'O PHP tem varias funções nativas dentro dele. Os exemplos de funções nativas de matematica podem ser vistos em http://php.net/manual/pt_BR/ref.math.php<br/>';
echo 'Alguns exemplos: Floor - arredonda pra baixo. Ceil - Arredonda pra cima. Round - Arredonda pra cima ou pra baixo, dependendo do valor. Pi - Informa o numero de PI. ABS - transforma um numero em absoluto.<br/>';
echo 'No caso do round, voce pode ainda colocar quantas casas decimais devem aparecer. Para isso, use round($variavel,2) sendo que esse 2 se refere a casas decimais que vão aparecer.<br/>';
echo 'a função rand gera um numero aleatorio. Sua linha de comando é $variavel = rand (1,9); sendo que 1,9 detemina o range de numeros a aparecer. Nesse caso, gera um numero entre 1 e 9.<br/>';
echo 'a função max retorna o maior valor em uma listagem. Ja a função min retorna o menor numero da lista.<br/>';
echo 'O php tb possui funções para Strings. Exemplo a função Trim, que serve para tirar os espaços de uma variavel e a strlen que serve para contar quantos caracteres tem na variavel.<br/>';
echo 'A função strtolower muda todo o texto para minusculo, ja a função strtoupper coloca todo o texto em maiuscula.<br/>';
echo 'A função str_replace troca uma palavra no texto por outra. sua linha de comando é $variavel = str_replace(""valor1","valor2"",$variaveloriginal);<br/>';
echo 'Se eu quiser usar somente um pedaço de uma strin, eu uso o comando substr. Sua linha de comando é $variavel=substr($variaveloriginal,0,6) sendo que 0 é de qual caractere vai começar a contar e 6 é a quantidade de caractere a pegar.<br/>';
echo 'Caso voce digite um numero negativo no campo de inicio, ele começa a contar do final para o começo.<br/>';
echo 'A função strpos retorna a posição de um determinado caracter. A função ucfirst coloca a primeira letra de uma string em maiuscula. Ja a ucwords transforma em maiuscula a primeira letra de cada palavra.<br/>';
echo 'a função explode trasforma uma string em array. Sua linha de comando é $variavel=explode(" ", $variaveloriginal) sendo que o espaço é o que vai dividir a string.<br/>';
echo 'A função number_format permite ordenar um valor numero. Sua linha de comando é number_format($variavel,2, "," , ".") sendo que o 2 é o numero de casas decimais, a virgula é o divisor de decimal e o ponto é o divisor de milhar.<br>';
echo 'Para ver mais funções para String, acesse http://php.net/manual/pt_BR/ref.strings.php<br>';
echo 'O array tambem tem suas funções nativas. Como exemplo para elas, vamos usar o array $lista =["1", "2", "3", "4"];<br/>';
echo 'a função count conta o total de itens no array. sua linha de comando é count($lista);<br/>';
echo 'Quando vc tiver um array, e fez uma função que pega somente uns itens desse array, pode usar a função array_diff pra listar os outros valores. A linha de comando é $variavel=array_diff($arraytotal, $listadecomparação)<br/>';
echo 'O array_filter permite que voce crie um a função dentro dele, para que possa fazer uma seleção mais precisa.<br/>';
echo 'A linha de comando é $filtrado=array_filter($array, function($item){if($item=x){return.true;}else{return false;}});<br/>';
echo 'O array_map serve para rodar uma função no array informado. No caso do array_map, a função é executada antes do array;<br/>';
echo 'A linha de comando é $dobrar=array_map(function($item){return item*2;},$array);<br/>';
echo 'O array_pop remove o ultimo item do array. Ja o array_shift remove o primeiro item do array.<br/>';
echo 'Para saber se existe um determinado valor em um array, use a função in_array.<br/>';
echo 'Sua linha de comando é if(in_array(valor,$array)){echo"EXISTE";}else{echo"NÃO EXISTE";}<br/>';
echo 'O array_search tambem localiza um item no array, mas ele informa tambem a posição dele. Porém ele tem que ser lançado em uma variável e nao dentro do IF.<br/>';
echo 'Sua linha de comando é $variavel=array_search(valor,$array);echo$variavel;<br/>';
echo 'Se voce tem um array de numeros, usando a função sort, ele organiza o array em ordem crescente. Para organizar em ordem decrescente, use o rsort.<br/>';
echo 'Se voce quiser fazer a ordenação sem mudar a chave do valor, use o asort. E pra fazer descrescente, mantendo a chave, o comando é arsort;<br/>';
echo 'A função explode serve para transformar uma string em Array. Ja o implode, transforma um array em string. No caso do implode, voce tem que determinar o caractere que vai determinar para a junção.<br/>';
echo 'Exemplo $array=implode(" ",$array); sendo que o espaço é o caracter que aparecera entre as palavras ou numeros que forem agrupados. Voce pode colocar qualquer caracter.<br/>';
echo 'o PHP trabalha com hora em milisegundos. a função time() mostra a hora em millisegundos, desde 1/1/1970 ate agora.<br/>';
echo 'O campo date é usado do seguinte modo: date("d/m/Y H:i:s"); Usando esse comando, ele mostra o dia como 01/01/2021 e hora como 12:00:00<br/>';
echo 'Todas as funções de Data e hora podem ser vistas em php.net/manual/pt_BR/function.date.php<br/>';
echo '<br/><br/>';

$dataerrada = '2021-03-14';
$datacerta = strtotime($dataerrada);
$dianumero = date ('w', $datacerta);
if ($dianumero == '0') {
    Echo date ('d-m-Y', $datacerta).' - Domingo';
} elseif ($dianumero == '1') {
    Echo date ('d-m-Y', $datacerta).' - Segunda-Feira';
} elseif ($dianumero == '2') {
    Echo date ('d-m-Y', $datacerta).' - Terça-Feira';
} elseif ($dianumero == '3') {
    Echo date ('d-m-Y', $datacerta).' - Quarta-Feira';
} else if ($dianumero == '4') {
    Echo date ('d-m-Y', $datacerta).' - Quinta-Feira';
} else if ($dianumero == '5') {
    Echo date ('d-m-Y', $datacerta).' - Sexta-Feira';
} else {
    Echo date ('d-m-Y', $datacerta).' - Sabado';
}
echo '<br/><br/>';

echo 'Para importar arquivos para o PHP, voce usa os comandos require e include<br/>';
echo 'linha de comando do require:<br/>';
require('header.php');
echo 'Geralmente, cria-se um arquivo config.php para colocar paramentos do banco de dados ou utras funções. Nele voce coloca as variavels que, quando esse arquivo for incluido, elas são importadas.<br/>';
echo 'Essa separação facilita a organização do site e fica mais facil de entender o codigo.<br/>';
echo 'A função require em caso de erro, ela nao abre nada no site e mostra um erro. Ja a função include mostra o erro, mas permite que o restante do codigo seja executado normalmente<br/>';
echo 'O comando require_once puxa o arquivo uma unica vez, evitando de aparecer a mesma pagina ou sobrescrever as variaveis.<br/>';
echo 'O Require tb pode acessar o arquivo dentro de outras pastas.<br/>';
require('template/header2.php');
echo '<br/>';
