create database dbcrud;

use dbcrud;

create table produtos (
id_produto int primary key auto_increment not null, 
nome_produto varchar(255) not null,
qtd_produto int not null,
valor_produto float not null,
cat_produto varchar(45) not null
);

select * from produtos; 
