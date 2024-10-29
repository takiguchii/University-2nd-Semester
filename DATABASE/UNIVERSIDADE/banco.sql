CREATE DATABASE universidade;
USE universidade;

CREATE TABLE departamento(
    id_departamento INT PRIMARY KEY AUTO_INCREMENT,
    nome_departamento VARCHAR(100)  NOT NULL,
    localizacao VARCHAR(100) NOT NULL
);

CREATE TABLE curso(
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome_curso VARCHAR(50) NOT NULL,
    duracao INT NOT NULL,
    departamento_id INT NOT NULL,
    FOREIGN KEY (departamento_id) REFERENCES departamento(id_departamento)
);

CREATE TABLE professor(
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100)  NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    id_departamento INT,
    FOREIGN KEY (id_departamento) REFERENCES departamento(id_departamento)
); 

CREATE TABLE aluno(
    id_aluno INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    id_curso INT,
    FOREIGN KEY(id_curso) REFERENCES curso(id_curso)
);

CREATE TABLE disciplina(
    id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    nome_disciplina VARCHAR(100) NOT NULL,
    credito INT NOT NULL,
    id_professor INT,
    id_curso INT,
    FOREIGN KEY (id_professor) REFERENCES professor(id_professor),
    FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);

CREATE TABLE matricula(
    id_matricula INT PRIMARY KEY AUTO_INCREMENT,
    id_aluno INT,
    id_disciplina INT,
    data_matricula DATE NOT NULL,
    nota_final DECIMAL(3,1) NOT NULL,
    FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno), 
    FOREIGN KEY (id_disciplina) REFERENCES disciplina(id_disciplina)
);
