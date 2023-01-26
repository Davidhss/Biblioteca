create database bdbiblioteca;
use bdbiblioteca;

create table tbfuncionario(
	codigof int primary key auto_increment,
    nome varchar(50),
    fone varchar(11),
    email varchar(30),
    periodo char(2),
    login varchar(30),
    senha varchar(30),
    perfil varchar(15)
);

insert into tbfuncionario (nome, fone, email, periodo, login, senha, perfil) values('David', 11123456789, 'rogerio@gmail.com','ma', 'david','123','adm');

create table tblivros(
	codigol int primary key auto_increment,
    nome varchar(50),
    genero varchar(15),
    autor varchar(50),
    editora varchar(30),
    isbn int,
    pag int,
    imagem blob
);

create table tbcliente(
	codigocli int primary key auto_increment,
    nome varchar(50),
    idade varchar(50),
    endereco varchar(50),
    datanasc date,
    cpf char(11),
    fone varchar(11),
    email varchar(30)
);

select * from tbcliente;

create table tbcomanda(
	codigoc int primary key auto_increment,
    dataemprestimo date,
    datadevolucao date,
    estoque int(5),
    codigocliente int,
    codigolivro int,
    FOREIGN KEY (codigocliente) REFERENCES tbcliente(codigocli),
	FOREIGN KEY (codigolivro) REFERENCES tblivros(codigol)
);

create table tbestoque(
	codigoe int primary key auto_increment,
    codigolivro int,
    FOREIGN KEY (codigolivro) REFERENCES tblivros(codigol),
    qtde int,
    qtdeAtual int
);

select * from tbfuncionario;