CREATE DATABASE BIBLIOTECA;

CREATE TABLE Autores(
    autor_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nacionalidade VARCHAR(100)
);

CREATE TABLE Livros(
    livro_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    ano_publicacao INT,
    genero VARCHAR(100),
    autor_id INT,
    FOREIGN KEY (autor_id) REFERENCES Autores(autor_id)
);


CREATE TABLE Usuarios(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    telefone VARCHAR(15),
    data_inscricao DATE
);

CREATE TABLE Emprestimos(
    emprestimo_id INT PRIMARY KEY AUTO_INCREMENT,
    livro_id INT,
    usuario_id INT,
    data_emprestimo DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    FOREIGN KEY (livro_id) REFERENCES Livros(livro_id),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

INSERT INTO Autores(nome, nacionalidade) VALUES
("J.K Rowling", "Britânica"),
("George Orwell", "Britânico"),
("Gabriel García Márquez", "Colombiano")

INSERT INTO Livros(titulo, ano_publicacao, genero, autor_id) VALUES
("Harry Potter e a Pedra Filosofal", 1997, "Fantasia", 1),
("1984", 1949, "Distopia", 2),
("Cem Anos de Solidão", 1967, "Realismo Mágico", 3)

INSERT INTO Usuarios(nome, email, telefone, data_inscricao) VALUES
("João Silva", "joao@gmail.com", "123456789", "2024-09-17"),
("Maria Oliveira", "maria@gmail.com", "987654321", "2024-09-16")

INSERT INTO Emprestimos(livro_id, usuario_id, data_emprestimo, data_devolucao) 
VALUES
(1, 1, "2024-09-10", "2024-09-20"),
(2, 2, "2024-09-12", "2024-09-22"),
(3, 1, "2024-09-10", "2024-09-20")


UPDATE Usuarios
SET telefone = "888888"
WHERE usuario_id = 1

UPDATE Usuarios
SET telefone = "77777777"
WHERE nome = "Maria Oliveira"