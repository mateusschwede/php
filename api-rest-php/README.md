# API REST com PHP
Criação e consumo de API REST com PHP, padrão PSR-4. A API tem função de intermediar a comunicação do banco de dados com o sistema, utilizando protocolo de comunicação HTTP (XML/JSON). O exemplo foi desenvolvido sem utilização de routes e o conceito de services, ao invés de controller (Somente nomeclatura difrente)

## Pré-requisitos
- LAMPP executando
- Composer: [Download](https://getcomposer.org/download)
- Módulo Apache Rewrite (Ver se ativado): [Tutorial](http://devfuria.com.br/linux/apache-habilitar-mod_rewrite-no-apache-mod)

## Banco de Dados
```sql
CREATE DATABASE serie_login;
CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(50) NOT NULL,
  name VARCHAR(50) NOT NULL
);
INSERT INTO user(email,password,name) VALUES ("ubsocial@gmail","123","ubsocial"),("ubsocial@outlook","456","ubsocial2");
```

## Passo a Passo
1. Criar diretórios App/Models, App/Services, public_html/.htaccess, public_html/index.php, composer.json, config.php
2. No diretório do projeto, executar 'composer update', onde os arquivos de configurações serão criados
3. Executar banco de dados, seguindo os dados no config.php
4. Informando, no browser, 'urlProjeto/api/user' listará JSON de todos usuários
5. Informando, no browser, 'urlProjeto/api/user/1' mostrará dados do usuário 1
6. urlProjeto/client.php é alusivo a outra aplicação, que consome a API