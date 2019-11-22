create table soaps(sid int(4),name varchar(20), price int(4), quantity int(4));

INSERT into soaps values(1, 'LUX', 60, 20);

create table shampoo(id int(4) not null PRIMARY KEY AUTO_INCREMENT,name varchar(20), price int(4), quantity int(4));

create table customer(username varchar(20) PRIMARY key, password varchar(20));