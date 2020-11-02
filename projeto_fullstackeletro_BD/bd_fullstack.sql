create database fullstackeletro
default character set utf8
default collate utf8_general_ci;

use fullstackeletro;

create table produtos(
    id int not null auto_increment,
    categoria varchar(100) not null, 
    descricao varchar(300) not null,
    preco float,
    precofinal float,
    imagem varchar(100),
    primary key(id)
)default charset = utf8;

insert into produtos
values
(1, 'geladeira', 'Refrigerador Brastemp Frost Free com Turbo Ice 500L', '4000.00', '3409.00', 'imagensFullStack/geladeira_brastemp1.png'),
(default, 'geladeira', 'Refrigerador Samsung Frost Free 4 portas - 564 Litros', '50000.00', '20000.00', 'imagensFullStack/geladeira_samsung2.png'),
(default, 'geladeira', 'Refrigerador Electrolux Degelo Prático 240 Litros', '1569.00', '1199.00', 'imagensFullStack/geladeira_electrolux3.png'),
(default, 'fogao', 'Fogão Esmaltec 4 Bocas Veneza Super com Acendimento Automático', '999.00', '459.00', 'imagensFullStack/fogao_esmaltec1.png'),
(default, 'fogao', 'Fogão de Piso 4 Bocas e Mesa de Vidro Temperado Electrolux', '1299.00', '1189.00', 'imagensFullStack/fogao_electrolux2.png'),
(default, 'microondas', 'Forno Microondas de Embutir Philco 25 Litros', '2000.00', '999.00', 'imagensFullStack/microondas_philco1.png'),
(default, 'microondas', 'Forno Microondas Electrolux Menu Kids 20 Litros', '509.00', '459.00', 'imagensFullStack/microondas_electrolux2.png'),
(default, 'microondas', 'Forno Microondas LG Tecnologia I Wave 30 Litros', '729.00', '589.00', 'imagensFullStack/microndas_lg3.png'),
(default, 'lavadora', 'Lavadora Electrolux com Dispenser Autolimpante 16kg', '2699.00', '1699.00', 'imagensFullStack/lavadora_electrolux1.png'),
(default, 'lavadora', 'Lavadora Branca 14kg com Dispenser Autolimpante Electrolux', '1999.00', '1599.00', 'imagensFullStack/lavadora_electrolux2.png'),
(default, 'lavalouca', 'Lava-Louças Electrolux 14 Serviços Display Digital', '6499.00', '4349.00', 'imagensFullStack/louca_electrolux1.png'),
(default, 'lavalouca', 'Lava-Louças Brastemp Ative 8 Serviços', '3199.00', '1987.00', 'imagensFullStack/louca_brastemp2.png');

create table pedidos(
    idnf int not null auto_increment,
    cliente varchar(100) not null, 
    endereco varchar(300) not null,
    telefone varchar(20) not null,
    produto varchar(300) not null,
    valorunit float not null,
    quantidade int not null,
    valortot float not null,
    primary key(idnf)
)default charset = utf8;

insert into pedidos
values
(1, 'Benjamim Augusto Ferreira', 'Rua A, 543', '(11)91234-5678','Forno Microondas Electrolux Menu Kids 20 Litros', '459.00', '1', '459.00' ),
(default, 'Valéria Lombardi', 'Rua B, 1877', '(11)98765-4321', 'Lava-Louças Electrolux 14 Serviços Display Digital', '4349.00', '1', '4349.00' ),
(default, 'Fabio de Souza', 'Rua C, 90', '(11)99111-1111', 'Refrigerador Brastemp Frost Free com Turbo Ice 500L', '3409.00', '1', '3409.00' );

