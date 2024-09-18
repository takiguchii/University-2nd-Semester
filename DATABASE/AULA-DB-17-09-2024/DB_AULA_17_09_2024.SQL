CREATE DATABASE BIBLIOTECA;

CREATE TABLE AUTORES(
    autor_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nascionalidade VARCHAR(100)
);

CREATE TABLE LIVROS(
    livro_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    ano_publicacao INT,
    genero VARCHAR(100),
    autor_id INT,
    FOREIGN KEY (autor_id) REFERENCES AUTORES(autor_id)
);

CREATE TABLE USUARIOS(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    telefone VARCHAR(15),
    data_inscricao DATE
);

CREATE TABLE EMPRESTIMO(
    emprestimo_id INT PRIMARY KEY AUTO_INCREMENT,
    livro_id INT,
    usuario_id INT,
    data_emprestimo DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    FOREIGN KEY (livro_id) REFERENCES LIVROS(livro_id),
    FOREIGN KEY (usuario_id) REFERENCES USUARIOS(usuario_id)
);

INSERT INTO AUTORES(nome, nascionalidade) VALUES 
("J.K ROWLING", "BRITANICA"),
("GEORGE ORWELL", "BRITANICO"),
("GABRIEL GARCIA MARQUEZ", "COLOMBIANO");

INSERT INTO LIVROS(titulo,ano_publicacao,genero,autor_id) VALUES
("HARRY POTTER E A PEDRA FILOSOFAL", 1997, "FANTASIA",1),
("1984",1949,"DISTOPIA", 2),
("100 ANOS DE SOLIDÃO",1967,"REALISMO MAGICO",3);

INSERT INTO USUARIOS (nome,email,telefone,data_inscricao) VALUES
("JOAO SILVA ", "JOAO@GMAIL.COM", "123456789", "2024-09-17"),
("MARIA OLIVEIRA", "MARIA@GMAIL.COM", "987654321", "2024-09-16");

INSERT INTO EMPRESTIMO(livro_id,usuario_id,data_emprestimo,data_devolucao) VALUES
(1,1,"2024-09-10","2024-09-20"),
(2,2,"2024-09-12","2024-09-22"),
(3,3, "2024-09-22", "2024-09-20");

UPDATE USUARIOS
SET telefone = "111111"
WHERE usuario_id = 1;