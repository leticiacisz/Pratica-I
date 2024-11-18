create database cadastro_clientes;
use cadastro_clientes;

create table cliente (
id_cliente int not null primary key auto_increment,
nome_cliente varchar (255),
email_cliente varchar(255),
telefone_cliente varchar(11)
);

create table chamados (
id_chamados int not null primary key auto_increment,
criticidade_chamados varchar(155),
status_chamados varchar(25),
datadaabertura_chamados date
);

create table colaboradores (
id_colaboradores int not null primary key auto_increment,
nome_colaboradores varchar (255)
);

create table cliente_has_chamados (
id_cliente_has_chamados int not null primary key auto_increment,
fk_cliente int not null,
foreign key (fk_chamados) references cliente(id_cliente),
fk_chamados int not null,
foreign key (fk_cliente) references cliente(id_cliente)
);

create table chamados_has_colaboradores (
id_chamados_has_colaboradores int not null primary key auto_increment,
fk_colaboradores int not null,
foreign key (fk_colaboradores) references colaboradores(id_colaboradores),
fk_chamados int not null,
foreign key (fk_chamados) references chamados(id_chamados)
);

create table cliente_has_colaboradores (
id_cliente_has_colaboradores int not null primary key auto_increment,
fk_cliente int not null,
foreign key (fk_colaboradores) references cliente(id_cliente),
fk_colaboradores int not null,
foreign key (fk_cliente) references cliente(id_cliente)
);




