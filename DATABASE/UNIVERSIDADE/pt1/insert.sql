-- Dados iniciais para a tabela `departamento`
INSERT INTO departamento(nome_departamento, localizacao) VALUES
("Departamento de Computação", "Bloco A"),
("Departamento de Administração", "Bloco B"),
("Departamento de Direito", "Bloco C"),
("Departamento de Contabilidade", "Bloco D"),
("Departamento de Engenharia", "Bloco E"),
("Departamento de Psicologia", "Bloco F"),
("Departamento de Pedagogia", "Bloco G"),
("Departamento de Arquitetura", "Bloco H"),
("Departamento de Marketing", "Bloco I"),
("Departamento de Engenharia Civil", "Bloco J");

-- Dados para a tabela `curso` (Removido o UNIQUE de departamento_id)
INSERT INTO curso(nome_curso, duracao, departamento_id) VALUES
("Engenharia de Software", 4, 1),
("Administração", 4, 2),
("Direito", 5, 3),
("Ciências Contábeis", 4, 4),
("Psicologia", 5, 6),
("Engenharia Civil", 5, 5),
("Engenharia Elétrica", 5, 5),
("Pedagogia", 4, 7),
("Arquitetura e Urbanismo", 5, 8),
("Marketing", 4, 9);

-- Dados para a tabela `aluno`
INSERT INTO aluno(nome, data_nascimento, endereco, telefone, email, id_curso) VALUES
("Maria Silva", "2001-05-12", "Rua das Flores, 123", "11987654321", "maria.silva@gmail.com", 1),
("João Souza", "1999-10-08", "Av. Central, 456", "11987651234", "joao.souza@gmail.com", 2),
("Ana Paula Costa", "2002-02-21", "Rua Alegre, 789", "11987659876", "ana.costa@gmail.com", 3),
("Pedro Fernandes", "2000-09-15", "Rua das Árvores, 234", "11987650987", "pedro.fernandes@gmail.com", 1),
("Carla Oliveira", "2001-12-05", "Av. Paulista, 567", "11987651267", "carla.oliveira@gmail.com", 4),
("Lucas Martins", "1998-03-12", "Rua dos Pinheiros, 890", "11987653421", "lucas.martins@gmail.com", 2),
("Fernanda Lima", "2001-11-19", "Rua dos Lírios, 100", "11987655678", "fernanda.lima@gmail.com", 3),
("Ricardo Alves", "1999-07-04", "Av. dos Estados, 200", "11987656543", "ricardo.alves@gmail.com", 4),
("Juliana Pereira", "2002-04-28", "Rua das Acácias, 345", "11987657892", "juliana.pereira@gmail.com", 1),
("Felipe Nogueira", "2000-08-16", "Rua das Rosas, 678", "11987658765", "felipe.nogueira@gmail.com", 2);

-- Dados para a tabela `professor` (Corrigido conflito de telefones)
INSERT INTO professor(nome, email, telefone, id_departamento) VALUES
("Prof. Carlos Mendes", "carlos.mendes@universidade.com", "11987651230", 1),
("Prof. Ana Rocha", "ana.rocha@universidade.com", "11987653450", 2),
("Prof. Roberto Lima", "roberto.lima@universidade.com", "11987657890", 3),
("Prof. Fernanda Souza", "fernanda.souza@universidade.com", "11987651231", 1), -- Corrigido telefone duplicado
("Prof. Claudia Andrade", "claudia.andrade@universidade.com", "11987659877", 4), -- Corrigido telefone duplicado
("Prof. João Batista", "joao.batista@universidade.com", "11987655679", 2), -- Corrigido telefone duplicado
("Prof. Maria Lopes", "maria.lopes@universidade.com", "11987653422", 3), -- Corrigido telefone duplicado
("Prof. Eduardo Borges", "eduardo.borges@universidade.com", "11987658766", 1), -- Corrigido telefone duplicado
("Prof. Luiz Almeida", "luiz.almeida@universidade.com", "11987657893", 4), -- Corrigido telefone duplicado
("Prof. Juliana Nunes", "juliana.nunes@universidade.com", "11987650988", 2); -- Corrigido telefone duplicado

-- Dados para a tabela `disciplina`
INSERT INTO disciplina(nome_disciplina, credito, id_professor, id_curso) VALUES
("Algoritmos e Estrutura de Dados", 4, 1, 1),
("Contabilidade Geral", 4, 5, 4), -- Atualizado professor e curso para ajustar relação
("Direito Penal", 5, 3, 3),
("Psicologia Clínica", 5, 6, 5),
("Física Aplicada", 4, 5, 6),
("Fundamentos de Administração", 4, 2, 2),
("Marketing Digital", 4, 10, 9),
("Pedagogia Infantil", 4, 7, 8),
("Arquitetura de Sistemas", 4, 1, 1),
("Ética Profissional", 4, 9, 3);

-- Dados para a tabela `matricula`
INSERT INTO matricula(id_aluno, id_disciplina, data_matricula, nota_final) VALUES
(1, 1, "2024-02-01", 8.5),
(2, 2, "2024-02-01", 7.0),
(3, 3, "2024-02-01", 9.0),
(4, 4, "2024-02-01", 6.5),
(5, 5, "2024-02-01", 7.5),
(6, 6, "2024-02-01", 8.0),
(7, 7, "2024-02-01", 7.8),
(8, 8, "2024-02-01", 9.2),
(9, 9, "2024-02-01", 7.9),
(10, 10, "2024-02-01", 8.1);
