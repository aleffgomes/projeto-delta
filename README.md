 
# Projeto TranspedrosaTEC em PHP
Desenvolvimento de projeto utilizando o acesso a banco de dados com o MySQL e linguagem PHP + CodeIgniter em MVC, HTML5, CSS, Bootstrap e Jquery.

# Tecnologias, API's, temas e plugins usados no desenvolvimento
- Linguagem back-end: PHP
- Framework: CodeIgniter
- Templates: AdminLTE 3.1 - desenvolvido em PHP + Bootstrap

# Configuração do Projeto:
### Iniciar servidor
 - Abra o arquivo _C:\xamppp\apache\conf\extra\httpd-vhosts.conf.bak_ em um editor ou bloco de notas e adicione o seguinte código no final do arquivo:
 ```<VirtualHost *:80>
    ServerAdmin webmaster@local.transpedrosatec.com
    DocumentRoot "C:/xamppp/htdocs/transpedrosatec/public"
    ServerName local.transpedrosatec.com
    ErrorLog "logs/local.transpedrosatec.com-error.log"
    CustomLog "logs/local.transpedrosatec.com-access.log" common
VirtualHost>
```
- Abra o arquivo _C:\Windows\System32\drivers\etc\hosts_ em um editor ou bloco de notas e adicione o seguinte comando ao final do arquivo:
```127.0.0.1  		local.transpedrosatec.com```
### Iniciar Sistema
 - Abra o navegador e acesse `local.transpedrosatec.com`
## Banco de Dados
   Antes de tudo, pare o xampp/wamp e, em seguida, remova o ponto e vírgula inicial (;) do seu xampp/php/php.ini no código a seguir:
   `;extension=intl`,
   e então reinicie seu xampp/wamp.
 - Crie um novo banco de dados em seu SGBD
 - Abra o arquivo **_.env_** e altere as seguintes informações do seu banco de dados:
```
   database.default.hostname = localhost
   database.default.database = transpedrosatec
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
```
### Importar tabela
Adicione o diretório PHP de sua maquina (C:\xampp\php) ao PATH do Windows [(TUTORIAL)](https://knowledge.autodesk.com/pt-br/support/navisworks-products/troubleshooting/caas/sfdcarticles/sfdcarticles/PTB/Adding-folder-path-to-Windows-PATH-environment-variable.html) e siga os seguintes passos:
 - Execute o CMD na pasta principal do projeto e digite o comando `php spark migrate`, então a base de dados será criada;
 - Ainda com o CMD aberto, é preciso digitar o comando `php spark db:seed NOME_DO_ARQUIVO` para cada nome de arquivo .php existente na pasta app/database/Seeds;
Exemplo (`php spark db:seed User`);
