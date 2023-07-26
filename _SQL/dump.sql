CREATE DATABASE cats;


CREATE TABLE cats.cat(
   id_cat INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
   name VARCHAR(255) NOT NULL,
   age INT NOT NULL
);


INSERT INTO cats.cat(name, age) VALUES ('Rax', 5);
INSERT INTO cats.cat(name, age) VALUES ('Sonya', 2);
INSERT INTO cats.cat(name, age) VALUES ('Mani', 4);
INSERT INTO cats.cat(name, age) VALUES ('Fox', 1);