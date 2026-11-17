create database solidariza;
use solidariza;
create table usuarios(
id int auto_increment primary key,
nome varchar (120) not null,
email varchar (150) not null unique,
senha varchar (255) not null,
cep char(8) not null,
logradouro varchar (150) not null,
bairro varchar (100) not null,
uf char (2) not null,
nivel_acesso enum('doador' , 'adm') not null default 'doador',
data_criacao datetime not null default current_timestamp
);

create table campanhas (
id int auto_increment primary key,
titulo varchar (150) not null,
descricao text not null,
status enum ('ativa', 'encerrada') not null default'ativa',
data_criacao datetime not null default current_timestamp
);

create table doacoes(
id int auto_increment primary key,
usuario_id int not null,
campanha_id int not null,
item_descricao varchar(255) not null,
quantidade int not null,
status_logistica enum('pendente', 'em transito') not null default 'pendente',
data_criacao datetime not null default current_timestamp
);

SHOW TABLES;
SELECT @@hostname, @@port, DATABASE();

SELECT * FROM usuarios;





