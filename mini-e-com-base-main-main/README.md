# Olá Jovens Talentos 👋
<h2>Introdução</h2>

Este repositório contém a estrutura base para o desenvolvimento do nosso projeto. Vamos desenvolver um mini e-commerce! 
Cada aluno poderá escolher o tema do seu comércio virtual. Podendo então ser uma loja de variedades, de roupas ou até mesmo de jogos eletrônicos. 
<br>
<br>
Utilizem sua criatividade! :exploding_head:

<h2>Conceito</h2>

<h3>MVC</h3>
Na estrutura deste projeto vamos utilizar a arquitetura MVC (Model View Controller), para organizar melhor nossos arquivos dentro do projeto. Ao contrário do que vinhamos fazendo, agora vamos separar os códigos html dos comandos SQL:
<br>
<br>
:white_check_mark: Os arquivos contendo elementos visuais (html, css e javascript) ficarão organizados na pasta de View. 
<br>
:white_check_mark: Os arquivos contendo instruções para o bancos de dados ou conexões ficarão organizados na pasta Model. 
<br>
:white_check_mark: Os nosso arquivos de controle, organizados na pasta Controller, serão os responsáveis por fazer uma ponte, passando os dados brutos extraídos do banco de dados para o html, 
ou passando as dados informados pelo usuário na tela, e montando os comandos SQL.

<h3>Namespace</h3>

Quando utilizamos programação orientada a objetos, é normal que criemos classes com nomes parecidos e em alguns casos iguais. Quando temos nomes iguais precisamos utilizar o recurso de namespace para resolver esse problema, mapeando e indicando ao PHP o caminho correto do arquivo da classe ao instanciar o objeto.

<h3>AutoLoad</h3>

É chato ter que ficar toda vez chamando os comandos de <code>include()</code> ou <code>require()</code> dos arquivos que contém as classes que queremos utilizar, não é mesmo? Para automatizar isso, é possível criar um recurso dentro do projeto que irá realizar a inclusão dos arquivos de forma automática, apenas utilizando o namespace definido para classe.

<h2>Funcionamento</h2>

:page_facing_up: index.php
<br>
<p>
  Todas as requisições do nosso projeto passam por este arquivo, portanto tenham cuidado ao alterar!
  <br>
  Ele contém o único comando <code>echo</code> que dererá existir no projeto inteiro. 
  <br>
  Dessa forma ele é o único arquivo onde deve ser adicionado conteúdo na resposta da requisição. 
  <br>
  Além disso, ele também inclui o autoloader no projeto e carrega as configs de ambiente.
</p>

:page_facing_up: routes.php
<br>
<p>
  Identifica a página solicitada através da variável global <code>$_GET['pg']</code>, cria uma instância do controlador dessa página e renderiza o conteúdo para ser exibido. Cada nova página deverá ser adicionada aqui.
</p>

:page_facing_up: config.php
<br>
<p>
  Aqui devem ser passadas as informações referentes a conexão com o banco de dados (host, dbname, port), através da variável global <code>$_ENV</code>.
</p>

:file_folder: vendor
<br>
<p>
  Essa pasta e seus arquivos foram gerados automaticamente, utilizando o gerador de dependências Composer. Nela estão os arquivos responsáveis pelo funcionamento do AutoLoad. Portanto, por favor não alterem o conteúdo dos arquivos desta pasta, de preferência nem abram ela.
  :no_entry_sign: Proibido modificar! :no_entry_sign:
</p>

:file_folder: app
<br>
<p>
  Esta é a pasta principal do nosso projeto. A maioria dos arquivos estão aqui.
</p>

:file_folder: view/layout
<br>
<p>
  Colocar aqui todos os arquivos .html, onde seu conteúdo será sempre fixo na página, ou seja, nunca irá mudar. Conteúdos html dinâmicos, deverão ser programados nas classes de View.
</p>

:page_facing_up: ViewPadrao.php
<br>
<p>
   Essa classe irá ler o conteúdo do respectivo arquivo .html da View (pasta view/layout), através do nome e inserir os conteúdos dinâmicos passados no controlador. Exemplo: Arquivos .html que tiverem <code>{{exemplo}}</code> em seu conteúdo, será automaticamente substituído pelo conteúdo passado no controlador como <code>'exemplo' => 'Conteúdo de Exemplo'</code>.
  <br>
  :warning: Todas as classes de View deverão estender <code>extends</code> dessa classe
</p>

:page_facing_up: ModelPadrao.php
<br>
<p>
  Aqui você deverá iniciar uma conexão com o banco de dados e realizar as principais operações, utilizando SQL, por exemplo <code>INSERT</code>, <code>UPDATE</code> e <code>DELETE</code>.
  <br>
  :warning: Todas as classes de Model deverão estender <code>extends</code> dessa classe
</p>

:page_facing_up: ControllerPadrao.php
<br>
<p>
  Responsável por identificar a ação que está sendo requisitada, através da variável global <code>$_GET['act']</code>, e chamar a respectiva função. Caso não for passada uma ação, por padrão apenas exibe a página.
  <br>
  :warning: Todas as classes de Controller deverão estender <code>extends</code> dessa classe
</p>

<br>
<h2> Bora CODAR!? :rocket: </h2>

<h4>:pushpin: Critérios de Avaliação - vide EVALUATOR.md<h4>
