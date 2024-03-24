<?php
echo 'toda variavel no PHP é precedida por um sinal de $.<br/>';
echo 'as variaveis podeme ser de varios tipos: numero, string, boolean, vazia<br/>';
echo 'o nome das variaveis nao podem conter acento nem caracter especial. Ela pode conter numero, mas somente no segundo caratcter para frente<br/>';
echo 'para declarar, usa como padrão o CamelCase, onde o primeiro nome começa com minusculo e o segundo com Maiusculo<br/>';
echo 'ele armazena numeros quebrados, mas tem que ser separado por . tipo 2,5 é tem que ser digitado 2.5<br/>';
echo 'string pode ser usada com aspas simples ou duplas<br/>';
echo 'comentarios no php é feito usando barras duplas //<br/>';
echo 'as variaveis vazias são declaradas como null<br/>';
echo 'para contatenar variaveis, usa o ponto. $nomeCompleto = $nome.$sobrenome<br/>';
echo 'para separar os valores, voce pode colocar um espaço no final da variavel inicial, ou no inicio da segunda variavel ou concatenar um espaço na variavel nomeCompleto. $nomeCompleto = $nome." ".$sobrenome.<br/>';
echo 'tambem pode declarar as variavels entre aspas duplas. $nomeCompleto = "$nome $sobrenome". Nesse caso, o espaço entre elas conta.<br/>';
echo 'para declarar varias variaveis, use um array. Ele tem que ser feito dentro de um colchetes e separados por virgula e entre aspas.<br/>';
echo 'para usar a variavel dentro do array, usa o nome do array, abre colchete e digita o numero do item, começando por 0<br/>';
echo 'voce pode usar uma variavel array dentro de outra. Para isso, dentro do colchetes da variável, vc coloca o nome do array precedido de ... ficando $var2 [ ... $var1], sendo que var1 é sua primeira array.<br/>';
echo 'pra chamar um item da array dentro da array, só chamar pela posição dele normalmente.<br/>';
echo 'se eu quiser mostrar todos os itens do array de uma vez uso o contando "print_r($array)".</br></br>';

$lista = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida']."</br></br>";

echo 'o comando para declarar condição é if(condição) { comando } else { comando }<br/>';
echo 'Quando fo fazer uma condicional que é igual, tem que colocar ==. Em casos de maior ou igual, o maior tem que vir na frente (>=). o simbolo de diferente é (!=)<br/>';
echo 'Condicional ternario é conhecido como o IF de uma linha. Sua linha de comando é (Condição) ? Resultado positivo : resultado negativo";"<br/>';
echo 'Para evitar erro em concatenação de variavel, voce pode usar o comando $variavel2 .= isset ($variavel) ? $variavel : " " . Se a Variavel nao existir, ele ignora ela.<br/>';
echo 'O condicional NULL CAO serve para prevenir um erro de variavel igual acima, mas de um modo mais simples. Sua linha de comando é $variavel2 .= $variavel ?? " " <br/>';
echo 'quando vc tem um grande numero de IF pra rodar a mesma coisa, use um Switch<br/>';
echo 'A linha de comando é:  switch($variavel) {case "valor1": echo "resultado1"";" break";" case "valor2": echo "resultado2"";" break";"}<br/>';
echo 'Loop é um comando que executa o mesmo codigo varias vezes dependendo do resultado de uma ação<br/>';
echo 'o loop while é bem similar ao IF. Sua linha de comando é while($variavel < ação) { echo "N: ".$variavel.  $variavel +=1;<br/>';
echo 'Se o loop while for mal montado, pode entrar em um loop infinito. O unico modo de parar o loop infinito é reiniciando o servidor.<br/>';
echo 'o loop for faz o mesmo que o while, mas ele tem menos chance de dar problema, pois ele força voce a criar um começo, meio e fim.<br/>';
echo 'Sua linha de comando é for($variavel = ação; $variavel < ação; $variavel +=1 ) { echo "N: ".$variavel.<br/>';
echo 'para somar 1 a um valor qualquer, voce pode usar $variavel = variavel + 1 ou $variavel += 1 ou ainda $variavel++<br/>';
echo 'O loop Foreach é feito para trabalhar com arrays. Sua linha de comando é foreach ($nomedoarray as $nomedavariavel) { echo $nomedavariavel }<br/>';
echo 'fazendo isso, ele abre o array e passa para o nome da variavel o nome do item dentro do array. e a cada rodada, ele troca o item, ate zerar o array.<br/>';
echo 'Caso voce queira pegar a chave de identificação do item, mude a estrutura do codigo para foreach ($nomedoarray as $chave =>$nomedavariavel) { echo .$chave .$nomedavariavel }<br/>';
echo '<br/><br/>';

$numero = 0;
$linha = 0;

while ($linha<10) {
    while ($numero<10) {
        echo '-';
        $numero++;
    }
    $linha++;
    $numero=0;
    echo'<br/>';
}

echo '<br/><br/>';

$hifen = '-';
$numero2 = 0;
while ($numero2 <20 ) {
    echo $hifen;
    $hifen.='-';
    $numero2++;
    echo'<br/>';
}