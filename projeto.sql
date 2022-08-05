drop database testedb;
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
insert into gerente(nome, cpf, login, endereco, senha)
  values('Jurema', '11054423903', 'juremagameplay@gmail.com', 'gjhghju', '34568965');

  insert into gerente(nome, cpf, login, endereco, senha)
    values('Kleber', '9090909090', 'klebergameplay@gmail.com', 'gjhghju', '34568965');

  insert into gerente(nome, cpf, login, endereco, senha)
    values('Clanderson', '12212121212', 'clandersongameplay@gmail.com', 'sla vey', 'informacao aleatoria');


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

insert into estabelecimentos(nome_fantasia, cnpj, endereco, razao_social, telefone,gerente_id)
   values('Google','12345','bervely hills','tecnologia','20019873650',1);

insert into estabelecimentos(nome_fantasia, cnpj, endereco, razao_social, telefone,gerente_id)
   values('Apple','098765','marechal deodoro','tecnologia','0987653221',2);

   insert into estabelecimentos(nome_fantasia, cnpj, endereco, razao_social, telefone,gerente_id)
      values('Zaca','12345','bervely hills','barbearia','20019873650',3);


create table if not exists cardapios(
  id int not null primary key auto_increment,
  data date not null,
  titulo varchar(50) not null,
  ativo boolean not null,
  estabelecimento_id int,
  campo_aleatorio varchar(30)
);
ALTER TABLE cardapios ADD CONSTRAINT estabelecimento_FK FOREIGN KEY (estabelecimento_id)REFERENCES estabelecimentos(id);
insert into cardapios(data, titulo, ativo, estabelecimento_id, campo_aleatorio) values ('2020/01/01','djklkjfg','0', 1, 'bom dia');

insert into cardapios(data, titulo, ativo, estabelecimento_id, campo_aleatorio) values ('2020/01/01','abcd','0', 2, 'boa tarde');

insert into cardapios(data, titulo, ativo, estabelecimento_id, campo_aleatorio) values ('2020/01/01','wxyz','0', 3, 'boa noite');


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

insert into funcionarios(nome, data_admissao, cpf, rua, telefone, login, senha, estabelecimento_id) values ('Joilson Silva','2022/03/03','119998765403','francisco candido','4235478654','joilsonsilva@gmail.com', '746254098', 1);
insert into funcionarios(nome, data_admissao, cpf, rua, telefone, login, senha, estabelecimento_id) values ('Ludovico Fonseca','2021/05/04','876344779009','xavier da silva','4297864205','ludovico@gmail.com', '0987654542', 1);

create table if not exists produtos(
  id int not null primary key auto_increment,
  nome varchar(50) not null,
  preco float not null,
  descricao text,
  ativo boolean not null,
  cardapio_id int
);
ALTER TABLE produtos ADD CONSTRAINT cardapio_FK FOREIGN KEY (cardapio_id)REFERENCES cardapios(id);

insert into produtos(nome, preco, ativo, cardapio_id) values('salada','10.90','1',1);
  insert into produtos(nome, preco, ativo, cardapio_id) values('amburgui','15.00','0',2);
    insert into produtos(nome, preco, ativo, cardapio_id) values('coxinha','5.50','1',3);

create table if not exists pedidos(
  id int not null primary key auto_increment,
  data date not null,
  mesa int(5) not null,
  valor_total float,
  cardapio_id int
);
ALTER TABLE pedidos ADD CONSTRAINT cardapio_FK1 FOREIGN KEY (cardapio_id)REFERENCES cardapios(id);


create table if not exists items_do_pedido(
  id int not null primary key auto_increment,
  subtotal float,
  quantidade int,
  produto_id int,
  pedido_id int
);
ALTER TABLE items_do_pedido ADD CONSTRAINT produto_FK FOREIGN KEY (produto_id)REFERENCES produtos(id);
ALTER TABLE items_do_pedido ADD CONSTRAINT pedido_FK FOREIGN KEY (pedido_id)REFERENCES pedidos(id);

select * from estabelecimentos;

select nome_fantasia, nome from estabelecimentos join gerente on estabelecimentos.gerente_id = gerente.id where gerente.id='2';

select nome from funcionarios join estabelecimentos on funcionarios.estabelecimento_id = estabelecimentos.id;

select titulo, nome_fantasia from cardapios join estabelecimentos on cardapios.estabelecimento_id = estabelecimentos.id;

select * from produtos join cardapios on produtos.cardapio_id = cardapios.id where cardapios.id='3';
