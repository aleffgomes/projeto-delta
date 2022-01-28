 
# Projeto CRUD em PHP
Desenvolvimento de projeto CRUD (cadastro de alunos) utilizando o acesso a banco de dados com o MySQL e linguagem PHP + CodeIgniter em MVC, HTML5, CSS, Bootstrap e Jquery.

# Tecnologias, API's, temas e plugins usados no desenvolvimento
- Linguagem back-end: PHP
- Framework: CodeIgniter
- Templates: AdminLTE 3.1 - desenvolvido em PHP + Bootstrap
- API's: ViaCep

# Configuração do Projeto:
## Banco de Dados
 - Crie um novo banco de dados em seu SGBD
 - Abra o arquivo **_.env_** e altere as seguintes informações do seu banco de dados:
```
   database.default.hostname = localhost
   database.default.database = projeto-delta
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
```
### Importar tabela
Antes de tudo, pare o xampp/wamp e, em seguida, remova o ponto e vírgula inicial (;) do seu xampp/php/php.ini no código a seguir:
`;extension=php_intl.dll`
E então reinicie seu xampp/wamp.
Após ativar a extensão e adicionar o diretório PHP ao PATH do Windows, siga os seguintes passos:
 - Execute o CMD na pasta principal do projeto e digite o comando `php spark migrate`, então a base de dados será criada
### Iniciar servidor
 - Ainda com o CMD aberto, digite o comando `php spark serve` para iniciar o servidor
### Iniciar Sistema
 - Abra o navegador e acesse `localhost:8080`
