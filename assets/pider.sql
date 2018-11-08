create database fiteducate;
use fiteducate;
create table usuario(
id integer auto_increment,
nome varchar(100) NOT NULL,
idade integer,
peso double NOT NULL,
altura double NOT NULL,
sexo enum ('M','F'),
habitos_ali varchar(1000),
exerc_frequ varchar(1000),
email varchar(100) NOT NULL,
senha varchar(8) NOT NULL,
lesao varchar(4),
primary key(id)
);


select * from usuario;


create table imc(
peso decimal(3,2) NOT NULL,
altura decimal(3,2) NOT NULL,
calcIMC integer
);
drop table imc;

create table nutricionista(
nome varchar(100) NOT NULL,
dataNasc varchar(255),
crn integer not null,
formacao varchar(1000),
primary key(crn)
);
drop table nutricionista;
select * from nutricionista;


create table mensagem(
id integer auto_increment,
usuario varchar(200),
mensagem varchar(1000),
Primary Key(id)
);
select * from mensagem