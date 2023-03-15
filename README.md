<h1 id="inicio" align="center">Sistema de Controle de Ementas e Planos de Ensino</h1>

<p align="justify">
    O projeto visa implementar o Sistema de Controle de Ementa e Plano de Ensino na universidade. Para que a instituição de ensino obtenham a autorização de abertura de cursos concedida pelo MEC, precisa enviar e aprovar documentos, que devem incluir uma
    descrição dos principais tópicos a serem tratados na disciplina. A ferramenta também pode ser utilizada como controle para que os gestores dos cursos garantam que esses documentos estejam disponíveis nos prazos exigidos. Os documentos são necessários
    para o processo de transferência de alunos de outras instituições de ensino.
</p>


<h2 id="indice">📋 ÍNDICE</h2>

<p>💠 <a href="#objetivo">OBJETIVO</a></p>
<p>💠 <a href="#intalacao">INSTALAÇÃO</a></p>
<p>💠 <a href="#executandoAmbiente">EXECUTANDO O AMBIENTE DE DESENVOLVIMENTO</a></p>
<p>💠 <a href="#rotas">ROTA</a></p>
<p>💠 <a href="#license">LICENÇA</a></p>
<p>💠 <a href="#contato">CONTATO</a></p>

<hr>

<!-- OBJETIVO ESPECIFICOS -->
<h2 id="objetivo">🎯 Objetivos</h2>

<pre>
    📌	<b>Disponibilizar o Plano de Ensino para os professores e estudantes</b>
    📌	<b>Apoiar a secretaria técnica mediante disponibilização dos planos de ensino para subsidiar processos de transferência de estudantes</b>
    📌	<b>Comunicar aos docentes, por meio de mensagens, sobre o status de geração dos planos de ensino</b>
    📌	<b>Disponibilizar controle de entrega de planos de ensino ao coordenador</b>
    📌	<b>Garantir as referências bibliográficas apontadas nos planos de ensino estejam catalogadas na biblioteca</b>
    📌	<b>Garantir que as bibliografias básicas e complementares estejam com as quantidades definidas no projeto pedagógico de cada curso</b>
    📌	<b>Armazenar em banco de dados, os planos de cada semestre letivo</b>
</pre>

<hr>

<!-- INSTALAÇÃO GERAL -->
<h2 id="intalacao">🛠️ INSTALAÇÃO</h2>
<h3>Requisitos</h3>

<pre>
    ✔️	<a href="https://getcomposer.org/download/">Composer</a>
    ✔️	<a href="https://laravel.com/docs/7.x">Laravel</a>
    ✔️	<a href="https://code.visualstudio.com/download">Visual Studio Code</a>
    ✔️	<a href="https://www.wampserver.com/en/">WampServer</a> ou <a href="https://www.apachefriends.org/pt_br/download.html">Xampp</a>
</pre>
<br>
<p><b>1 - </b>Instação Visual Studio Code</p>
<p><b>2 - </b>Instação WampServer</p>
<p><b>3 - </b>Instação Composer</p>
<p><b>4 - </b>Clone Repositório
    <pre><b>    git clone</b> https://github.com/wagnerolivsantos/SCPE1.0.git</pre>
</p>
<p><b>5 - </b>Iniciar Visual Studio Code com a pasta do projeto sendo workspace. Posteriormente copiar o arquivo <b>.env.example</b> e colar como <b>.env</b></p>
<p><b>6 - </b>Abrir o Terminal do Visual Studio, seguindo os seguintes comandos:
    <pre>
        -> composer install
        -> php artisan key:generate
        -> php artisan serve => (Acesse: http://127.0.0.1:8000/login)
        -> retornar ao terminar e parar o servidor ctrl + c
    </pre>
</p>
<p><b>7 - </b>Iniciar o WampServer e acessar o MySql Console.</p>
<p><b>8 - </b>Executar o Script 'modeloLogico.sql' no  MySql Console que encontra-se no diretório database dentro do projeto.</p>
<p><b>9 - </b>Configurar o arquivo '.env' na pasta do projeto para ter conexão com o Base de Dados.
    <pre>
        Ao abrir o arquivo .env, procure por:
        <p>
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel
            DB_USERNAME=root
            DB_PASSWORD=
        </p>
        Configure de acordo com seu Banco de Dados
        <p>
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=scpe
            DB_USERNAME=root
            DB_PASSWORD=
        </p>
        Após esse processo feche o arquivo '.env'.
    </pre>
</p>

<hr>

<!-- EXECUCAÇÃO DO AMBIENTE -->
<h2 id="executandoAmbiente">🏍️💨 EXECUTANDO AMBIENTE DE DESENVOLVIMENTO</h2>

<p>Iniciar o terminal no Visual Studio, tendo o projeto aberto como workspace.</p>
<pre>
    php artisan serve (Acesse: http://127.0.0.1:8000/login)
</pre>

<hr>

<h2 id="rotas">🚊 Rotas</h2>

| EndPoint | Método | Body | Resposta |
| -------- | ------ | --------- | -------- |
| /api/cursos | POST |  | {"data":[{"id":1,"curso":"Ciências da Computação"},{"id":2,"curso":"Ciências Econômicas"},{"id":3,"curso":"Segurança da Informação"}]} |
| /api/grades | POST | curso:1 | {"data":[{"id": 1,"ano": 2020,"semestre": "1"},{"id": 2,"ano": 2019,"semestre": "2"},{"id": 3,"ano": 2018,"semestre": "3"}]} |
| /api/disciplinas | POST | grade:2 | {"data": [{"id": 7,"disciplina": "Algoritmos e Estrutura de Dados II"},{"id": 8,"disciplina": "Estatística Aplicada a Computação"},{"id": 9,"disciplina": "Linguagem de Programação II"},{"id": 10,"disciplina": "Matemática Aplicada"},{"id": 11,"disciplina": "Psicologia Aplicada"},{"id": 12,"disciplina": "Sistemas Digitais"}]} |
| /api/ementa | POST | disciplina:7 | {"data": [{"ementa": "Ementa: Algorítmos e Estrutura de Dados II"}]} |

<h3>Exemplo</h3>

<p>Essa rota retorna um <b><i>JSON</i></b> contendo todos os <code>cursos</code>.</p>

<pre>
	<code><b>Post</b> /api/cursos</code>
</pre>

<h4>Resultado:</h4>

```json
{
    "data": [
        {
            "id": 1,
            "curso": "Ciências da Computação"
        },
        {
            "id": 2,
            "curso": "Ciências Econômicas"
        },
        {
            "id": 3,
            "curso": "Segurança da Informação"
        }
    ]
}
```
<hr>

<!-- LICENÇA -->
<h2 id="license">💡	LICENÇA</h2>

<p>Este projeto está licenciado sob a licença MIT - consulte o arquivo <a href="#">LICENSE.md</a> para obter detalhes</p></p>

<hr>

<h2 id ="contato">✉️ CONTATO</h2>

<p><b>Contato:</b> wagnerolivsantosdev@gmail.com</p>

<hr>
	
<p align="right"><a href="#inicio">🆙</a></p></p>
