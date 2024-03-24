Para criar uma Class, use:<br>
class NomeDaClass {<br>
    public $var1=0;<br>
    public $var2 = [];<br>
    public $var3;<br>
} <br>
As variaveis tem que ser publica para poderem ser usadas fora da class.<br>
Além delas, existem as private e as protected, porém ambas só podem ser executadas dentro da class. <br>
Pra usar essa class em um objeto, use:<br>
<br>
$variavel = new NomeDaClass();<br>
$variavel->var1 = 10;<br>
$variavel->var2 = ['valor 1','valor 2','valor 3'];<br>
<br>
Para exibir, use:<br>
<br>
echo variavel->var1;<br>
echo variavel->var2;<br>
<br>
é possivel criar uma função dentro da class, pra isso, faça:<br>
<br>
class NomeDaClass {<br>
    public $likes = 0;<br>
    <br>
    public function aumentarLikes() {<br>
        $this->likes++;<br>
    }<br>
} <br>
<br>
E pra executar a função, execute:<br>
<br>
$varriavel = new NomeDaClass();<br>
$variavel->aumentarLikes();<br>
<br>
As variaveis que ficam dentro da classe podem ser tipadas, pra isso, após o public, voce escreve o tipo dela. Exemplo: public int $likes = 0;<br>
Ela pode ser array, string, int ou qualquer outro tipo de variavel. <br>
O Metodo construtor é um metodo que é executado toda vez que você cria um objeto.<br>
Sua linha de comando é<br><br>
public function __contruct() {<br>
    Ação<br>
}<br><br>
O Encapsulamento tem como objetivo proteger os dados de acesso ou edição. Também é chamado de setget. Um exemplo de proteção é:<br><br>
class autorProtegido {<br>
    public string author;<br>
    <br>
    public function setAuthor($nome) {<br>
        $this->author = $nome;<br>
    }<br>
    <br>
    public function getAuthor() {<br>
        return $this->Author;<br>
    }<br>
}<br>
$post1 = new Post();<br>
$post1->setAuthor('nomeDoAutor');<br>
<br>
echo "Nome Do Autor: ".$post1->getAuthor();<br>
<br>
O método estatico é o metodo que voce faz dentro da classe e ele é independente, podendo ser usado externamente. Exemplo:<br>
<br>
class Matematica {<br>
    public static function somar($x, $y) {<br>
        return $x + $y;<br>
    }<br>
}<br>
<br>
$echo Matematica::somar(10,20);<br>
<br>
Quando a função esta como static no nome, se eu escrever a classe, colocar :: e colocar a function, ele executa, sem a necessidade de criar um objeto.<br>
Uma classe de herança permite voce usar tudo que ja exista em uma classe previamente criada para ela, adicionando novos recursos.<br>
Exemplo:<br>
<br>
class Classe {<br>
    atributos da classe<br>
}<br>
<br>
class Herdeira extends Classe {<br>
    atributos da classe<br>
}<br>
<br>
Voce pode herdar uma classe e em uma terceira classe, colocar para herdar a segunda, que ele pega a primeira tambem.<br>
Uma propriedade privada nao pode ser alterada a nao ser na propriedade mae. Ja uma propriedade protected pode ser alterada numa propriedade herdada.<br>
Se voce criar uma propriedade dentro de uma classe que seja igual uma que ja exista na classe herdada, a que vai prevalecer é a da classe que for chamada na criação do objeto.<br>
O uso da interface em um site, faz com que voce garanta que ele fique mais organizado e que todas as funções previamente atribuidas, sejam usadas em novas atualizações.<br>
Sua linha de comando é:<br>
<br>
interface LojaVirtual {<br>
    public function listarProdutos();<br>
    public function adicionarProdutos();<br>
}<br>
class loja implenets LojaVirtual{<br>
    public function listarProdutos() {<br>
        comandos...<br>
    };<br>
    public function adicionarProdutos(){<br>
        comandos...<br>
    }<br>
}<br>
Se na classe que voce criou e definiu o implements voce nao declarar as funções constantes na interface, o sistema dará um erro, o que garante que você sempre crie todas as funções necessarias para o bom funcionamento do sistema.<br>
Não fiz anotações de Namespace e nem de Injeção de dependências.<br>
A PSR determina regras de bom uso do PHP, para facilitar a leitura de codigos em todos os sistemas. Uma das regras é criar todas as classes em um arquivo a parte, e um outro arquivo para rodar essas classes.<br>
É recomendado sempre iniciar os arquivos php com o codigo "< ? php" ou "< ? =" e sempre usar o UTF-8 sem o BOM como codificação.<br>
Nomes de classes devem ser declarados usando StudlyCaps, ou seja, a primeira letra TEM que ser maiuscula. Exemplo: class MatematicaBasica {...}<BR>
Nomes de constantes tem que ser sempre em Caixa Alta. Exemplo: class MatematicaBasica {const VERSION = '1.0'}. Caso tenha dois nomes, use _ como separador.<br>
Metodos, funções e variáveis devem ser escritos usando camelCase. Exemplo: public function listarTudo () {...}. Ou seja, a primeira letra da primeira palavra é minuscula e a segunda palavra é maiuscula.<br>
Quando precisamos chamar uma pagina que tem uma classe que usamos, temos que usar o require e colocar o caminho da pagina. Mas pdoemos tambem usar o autoload.<br>
Pra usar o autoload, voce usa a função spl_autoload_register(function($class){require 'classes/'.$class.'.php';} No codigo citado, estamos apontando para o caminho classes/arquivo.php, sendo que o nome do arquivo tem que estar do mesmo jeito que a classe que você esta instanciando.<br>
Pra melhorar o autoload, voce pode colocar um if(file_exists()) pra checar se o rquivo existe antes. Exemplo completo abaixo:<br>
<br>
spl_autoload_register(function($class) {<br>
    if(file_exists('classes/'.$class.'.php')) {<br>
        require 'classes/'.$class.'.php';}<br>
    }<br>
});<br>
<br>
$m = new Matematica();<br>
echo $m->somar(10,20);<br>
<br>
Nesse exemplo acima, quando instanciamos a classe Matematica, o autoload vai buscar o arquivo classes/Matematica.php. e Caso ele exista, ele roda a função.<br>
Pra organizar mais ainda, voce pode criar um arquivo autoload.php e colocar o codigo de autoload nele, e no arquivo principal, vc coloca um require no arquivo autoload.php.<br>
Gerenciament de dependencia permite que usemos codigos ja feitos em nosso sistema, para nao ter que digitar tudo novamente. Um dos links é packagist.org/explore/<br>
O Composer é um desses gerenciadores de dependencia. Instalando ele no seu pc. vc pode acionar o comando composer, e ele ja pode importar os arquivos.<br>
Para usar o composer, voce tem que ter um arquivo no seu projeto chamado composer.json. Dentro desse arquivo, é necessario ter o seguinte codigo:<br><br>
{<br>
    "require":{<br>
        <br>
    }<br>
}<br><br>
Na sequencia, voce tem que rodar o comando pelo terminal, dentro da pasta onde está seu projeto: composer install<br>
Depois só instalar os arquivos que voce quiser, pegando os comandos necessarios no site packagist.org/explore/<br>

<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>
<br>
Quando voce instala o composer, ele cria o seu proprio autoload.php. Para que voce possa usar o seu autoload novamente, voce precisa colocar dentro do require do arquivo composer.json o seguinte comando:<br>
<br>
"autoload":{<br>
    "psr-4": {"classes\\": "classes/"}<br>
}<br>
<br>
Feito isso, voce roda um comando no terminal pra gerar o autoload novamente. O Comando é composer dump-autoload<br>
Desse modo, é necessario colocar no namespace o caminho todo do arquivo. Seguindo o codigo acima, eles estão salvos em uma pasta chamada classes/<br>
Outra poissibilidade é 