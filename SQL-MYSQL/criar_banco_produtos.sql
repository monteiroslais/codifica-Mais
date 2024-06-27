CREATE {DATABASE} {IF NOT EXISTS} gestao_produtos;

USE gestao_produtos;

CREATE TABLE produtos;

(id auto_increment primary key;
nome varchar(100);
sku varchar (5);
descrição varchar(255);
categoria varchar(100);
preco float (10,2);
unidade_medida varchar (3);
peso decimal (3);
qtd_estoque bigint;
fabricante varchar(50);
fornecedor varchar(50);
deleted_at datetime;
created_at datetime;
update_at datetime);
