create database if not exists testedb;
  use testedb;

create table if not exists gerente(
  id int not null primary key auto_increment,
  nome varchar(50) NOT NULL,
  cpf char(11) NOT NULL,
  login varchar(100) not null,
  endereco varchar(100) not null,
  senha varchar(50) not null
);

create table if not exists estabelecimentos(
  id int not null primary key auto_increment,
  nome_fantasia varchar(50) NOT NULL,
  cnpj varchar(50) not null,
  endereco varchar(50) not null,
  razao_social varchar(50) not null,
  telefone varchar(11) not null,
  gerente_id int
);

ALTER TABLE estabelecimentos ADD CONSTRAINT gerente_FK FOREIGN KEY (gerente_id)REFERENCES gerente(id);

create table if not exists cardapios(
  id int not null primary key auto_increment,
  data date not null,
  titulo varchar(50) not null,
  ativo boolean not null,
  estabelecimento_id int
);
ALTER TABLE cardapios ADD CONSTRAINT estabelecimento_FK FOREIGN KEY (estabelecimento_id)REFERENCES estabelecimentos(id);


create table if not exists funcionarios(
  id int not null primary key auto_increment,
  nome varchar(50) not null,
  data_admissao date,
  cpf varchar(50) not null,
  rua varchar(50) not null,
  telefone varchar(11) not null,
  login varchar(30) not null,
  senha varchar(50) not null,
  estabelecimento_id int
);
ALTER TABLE funcionarios ADD CONSTRAINT estabelecimento_FK1 FOREIGN KEY (estabelecimento_id)REFERENCES estabelecimentos(id);


create table if not exists produtos(
  id int not null primary key auto_increment,
  nome varchar(50) not null,
  preco float not null,
  descricao text,
  ativo boolean not null,
  cardapio_id int
);
ALTER TABLE produtos ADD CONSTRAINT cardapio_FK FOREIGN KEY (cardapio_id)REFERENCES cardapios(id);


create table if not exists pedidos(
  id int not null primary key auto_increment,
  data date not null,
  mesa int(5) not null,
  valor_total float,
  cardapio_id int
);
ALTER TABLE produtos ADD CONSTRAINT cardapio_FK1 FOREIGN KEY (cardapio_id)REFERENCES cardapios(id);


create table if not exists items_do_pedido(
  id int not null primary key auto_increment,
  subtotal float,
  quantidade int,
  produto_id int,
  pedido_id int
);
ALTER TABLE items_do_pedido ADD CONSTRAINT produto_FK FOREIGN KEY (produto_id)REFERENCES produtos(id);
ALTER TABLE items_do_pedido ADD CONSTRAINT pedido_FK FOREIGN KEY (pedido_id)REFERENCES pedidos(id);


insert into gerente (nome,) values('Jurema') ('Alfredo') ('Tombson') where=1;
