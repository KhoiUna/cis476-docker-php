drop database if exists officemin;

create database officemin;

use officemin;

create table users (
id int primary key auto_increment, 
username varchar(100) NOT NULL,
password varchar(255) NOT NULL, 
UNIQUE KEY (id), UNIQUE KEY (username) );

-- letmein
insert into users (username, password) 
values ("admin", "$2y$10$BMcKSABQyyciPbUWl.pE9.6zv1tbk.O0QXlX/NMLxWt7vLxOCx/h.");


create table items (id int primary key auto_increment, brand varchar(255),
product varchar(255), price decimal(5, 2) );


insert into items (brand, product, price) values ("Folgers", "Coffee", 33.59);
insert into items (brand, product, price) values ("Dunder Mifflin", "Copy Paper", 53.99);
insert into items (brand, product, price) values ("Philipino", "Manila Folders", 12.50);
insert into items (brand, product, price) values ("Squidly", "Ink Cartridge", 124.89);
insert into items (brand, product, price) values ("Sparkle", "Paper Towels", 25.99);
insert into items (brand, product, price) values ("Lex Luthor", "Flash Drive 32GB", 5.99);
