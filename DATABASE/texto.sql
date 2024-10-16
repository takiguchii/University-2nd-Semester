
sudo mysqldump -u root -p elden_ring > backup.sql

sudo mysql -u root -p

DROP DATABASE nome_do_banco;

DROP TABLE nome_da_tabela;

SELECT * FROM nome_da_tabela;

CREATE TABLE nome_da_tabela (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    idade INT
);

INSERT INTO nome_da_tabela (nome, idade) VALUES ('Alê', 25);

USE nome_do_banco;

CREATE DATABASE nome_do_banco;

alter table jogo 
add descrição text; -- addicionando novo campo 
