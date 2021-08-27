# beer-collection-crud-php
Aplicação para catalogar cervejas artesanais feita em PHP e MySQL.

CRUD com PHP orientado a objetos, PDO e MySQL

## Banco de dados

Crie um banco de dados e execute as instruções SQLs abaixo para criar a tabela `cervejas`:
```sql
  CREATE TABLE `cervejas` (
  	`id` INT(11) NOT NULL AUTO_INCREMENT,
  	`marca` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `nome` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `estilo` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	`descricao` TEXT(65535) NOT NULL COLLATE 'utf8_general_ci',
  	`imagem` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	PRIMARY KEY (`id`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

Caso não tenha o Composer instalado, baixe pelo site oficial: [https://getcomposer.org/download](https://getcomposer.org/download/)

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```shell
 composer install
```

Após essa execução uma pasta com o nome `vendor` será criada na raiz do projeto e você já poderá acessar pelo seu navegador.
