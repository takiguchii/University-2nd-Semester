create DATABASE universidade;
USE universidade;


CREATE TABLE aluno(
    id_aluno INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL ,
    data_nascimento DATE NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    telefone INT UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    id_curso INT,
    FOREIGN KEY(id_curso) REFERENCES curso (id_curso)
);
CREATE TABLE professor(
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone INT UNIQUE NOT NULL,
    id_departamento INT,
    FOREIGN KEY (id_departamento) REFERENCES departamento(id_departamento)
); 
CREATE TABLE curso(
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome_curso VARCHAR(50) NOT NULL,
    duracao INT NOT NULL,
    departamento_id INT UNIQUE NOT NULL
);
CREATE TABLE departamento(
    id_departamento INT PRIMARY KEY AUTO_INCREMENT,
    nome_departamento VARCHAR(100) UNIQUE NOT NULL,
    localizacao VARCHAR(100) UNIQUE NOT NULL
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
    FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno), 
    FOREIGN KEY (id_disciplina) REFERENCES disciplina(id_disciplina),
    data_matricula DATE NOT NULL,
    nota_final decimal(2,1) NOT NULL
);

INSERT INTO aluno(nome,data_nascimento,endereco,telefone,email) VALUES
("maria silva","2001-01-12", "rua das flores 123","119876542321","maria.silva@gmail.com"),
("joão souza","1999-10-08", "av.central 456","11987651234","joao.souza@gmail.com"),
("ana paula costa","2002-02-21","rua alegre, 789", "11987650987", "ana.costa@gmail.com"),
("pedro fernandes", "2000-09-15","rua das arvores,234","11987651287", "pedro.fernandes@gmail.com"),
("carla oliveira", "2001-12-05","av.paulista,567","11987651267","carla.oliveira@gmail.com"),
("lucas martins","1998-03-12","rua dos pinheiros,890", "11987653421","lucas.martuns@gmail.com"),
("fernanda lima ", "2001-11-19", "rua dos lirios,100","11987655678","fernanda.lima@gmail.com"),
("ricardo alves", "1999-07-04", "av.dos estados", "11987656543","ricardo.alves@gmail.com" ),
("juliana pereira","2002-04-28", "rua das acacias", "11987657892", "juliana.pereira@gmail.com"),
("felipe nogueira", "2000-08-16","rua das rodas,678","11987658765","felipe.nogueira@gmail.com")


INSERT INTO professor(id_professor,nome,email,telefone,departamento_id){
    ("prof.carlos mendes","carlos.mendes@universidade.com","11987651230",1 )
    ("prof. ana rocha","ana.rocha@universidade.com","11987653450",2)
    ("prof. roberto lima","roberto.lima@universidade.com","11987657890",3)
    ("prof. fernanda souza ", "fernanda.souza@universidade.com","11987654321",4)
    ("prof. claudia andrade", "claudia.andrade@universidade.com","11987659876"),5
    ("prof. joão batista", "joao.batista@universidade.com","11987655678",6)
    ("prof. maria lopes","maria.lopes@universidade.com","11987653421",7)
    ("prof. eduardo boges","eduardo.boges@universidade.com","11987658765",8)
    ("prof. luiz almeida", "luiz.almeida@universidade.com","11987657892",9)
    ("prof. juliana nunes", "juliana.nunus@universidade.com","11987650987",10)
}
INSERT INTO curso(id_curso,nome_curso,duracao,departamento_id){

}
INSERT INTO departamento(id_departamento,nome_departamento,localizacao){
}
INSERT INTO disciplina(id_disciplina,nome_disciplina,credito)