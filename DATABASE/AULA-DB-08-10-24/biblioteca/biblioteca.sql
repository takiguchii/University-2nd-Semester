CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE autores (
    id_autor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    data_nascimento DATE
);

CREATE TABLE livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    id_autor INT,
    isbn VARCHAR(20),
    data_publicacao DATE,
    genero VARCHAR(50),
    quantidade_copiadas INT,
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor)
);

CREATE TABLE membros (
    id_membro INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    data_nascimento DATE,
    endereco VARCHAR(255),
    telefone VARCHAR(15),
    email VARCHAR(100)
);

CREATE TABLE funcionarios (
    id_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    cargo VARCHAR(50),
    data_admissao DATE,
    telefone VARCHAR(15),
    email VARCHAR(100)
);

CREATE TABLE emprestimos (
    id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    id_livro INT,
    id_membro INT,
    data_emprestimo DATE,
    data_devolucao DATE,
    status ENUM('ativo', 'concluído'),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro),
    FOREIGN KEY (id_membro) REFERENCES membros(id_membro)
);

CREATE TABLE reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    id_livro INT,
    id_membro INT,
    data_reserva DATE,
    data_expiracao DATE,
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro),
    FOREIGN KEY (id_membro) REFERENCES membros(id_membro)
);

CREATE TABLE generos (
    id_genero INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(50)
);

CREATE TABLE livros_generos (
    id_livro INT,
    id_genero INT,
    PRIMARY KEY (id_livro, id_genero),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro),
    FOREIGN KEY (id_genero) REFERENCES generos(id_genero)
);

CREATE TABLE multas (
    id_multa INT PRIMARY KEY AUTO_INCREMENT,
    id_emprestimo INT,
    valor DECIMAL(10, 2),
    data_multa DATE,
    FOREIGN KEY (id_emprestimo) REFERENCES emprestimos(id_emprestimo)
);

CREATE TABLE avaliacoes (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    id_livro INT,
    id_membro INT,
    nota INT CHECK(nota >= 1 AND nota <= 5),
    comentario TEXT,
    data_avaliacao DATE,
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro),
    FOREIGN KEY (id_membro) REFERENCES membros(id_membro)
);
