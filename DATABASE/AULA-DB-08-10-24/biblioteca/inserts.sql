INSERT INTO autores (nome, sobrenome, data_nascimento) VALUES 
('J.K.', 'Rowling', '1965-07-31'),
('George', 'Orwell', '1903-06-25'),
('J.R.R.', 'Tolkien', '1892-09-21'),
('Agatha', 'Christie', '1890-09-15'),
('Isaac', 'Asimov', '1920-01-02');

INSERT INTO livros (titulo, id_autor, isbn, data_publicacao, genero, quantidade_copiadas) VALUES 
('Harry Potter e a Pedra Filosofal', 1, '978-3-16-148410-0', '1997-06-26', 'Fantasia', 10),
('1984', 2, '978-0-452-28423-4', '1949-06-08', 'Ficção Científica', 5),
('O Senhor dos Anéis', 3, '978-0-261-10221-4', '1954-07-29', 'Fantasia', 8),
('Assassinato no Expresso do Oriente', 4, '978-0-00-711931-8', '1934-01-01', 'Mistério', 6),
('Eu, Robô', 5, '978-0-553-38053-4', '1950-12-02', 'Ficção Científica', 7);

INSERT INTO membros (nome, sobrenome, data_nascimento, endereco, telefone, email) VALUES 
('João', 'Silva', '1990-01-15', 'Rua A, 123', '11987654321', 'joao@example.com'),
('Maria', 'Oliveira', '1985-03-20', 'Avenida B, 456', '11998765432', 'maria@example.com'),
('Carlos', 'Santos', '1995-05-25', 'Rua C, 789', '11876543210', 'carlos@example.com'),
('Ana', 'Pereira', '2000-08-30', 'Rua D, 101', '11765432109', 'ana@example.com'),
('Lucas', 'Lima', '1992-11-12', 'Avenida E, 202', '11654321098', 'lucas@example.com');

INSERT INTO funcionarios (nome, sobrenome, cargo, data_admissao, telefone, email) VALUES 
('Fernando', 'Costa', 'Bibliotecário', '2015-03-01', '1133334444', 'fernando@example.com'),
('Patrícia', 'Martins', 'Assistente', '2018-05-15', '1144445555', 'patricia@example.com'),
('Renato', 'Souza', 'Gerente', '2020-07-20', '1155556666', 'renato@example.com'),
('Roberta', 'Teixeira', 'Auxiliar', '2019-06-10', '1166667777', 'roberta@example.com'),
('Sérgio', 'Alves', 'Tecnólogo', '2022-01-05', '1177778888', 'sergio@example.com');

INSERT INTO emprestimos (id_livro, id_membro, data_emprestimo, status) VALUES 
(1, 1, '2024-10-01', 'ativo'),
(2, 2, '2024-10-02', 'ativo'),
(3, 3, '2024-10-03', 'concluído'),
(4, 4, '2024-10-04', 'ativo'),
(5, 5, '2024-10-05', 'concluído');

INSERT INTO reservas (id_livro, id_membro, data_reserva, data_expiracao) VALUES 
(1, 2, '2024-10-01', '2024-10-15'),
(3, 1, '2024-10-02', '2024-10-16'),
(4, 3, '2024-10-03', '2024-10-17'),
(2, 5, '2024-10-04', '2024-10-18'),
(5, 4, '2024-10-05', '2024-10-19');

INSERT INTO generos (descricao) VALUES 
('Ficção Científica'),
('Fantasia'),
('Mistério'),
('Romance'),
('Aventura');

INSERT INTO avaliacoes (id_livro, id_membro, nota, comentario, data_avaliacao) VALUES 
(1, 1, 5, 'Excelente livro, muito envolvente!', '2024-10-06'),
(2, 2, 4, 'Bom, mas um pouco difícil de entender.', '2024-10-07'),
(3, 3, 5, 'Um clássico que todos deveriam ler.', '2024-10-08'),
(4, 4, 3, 'Não gostei tanto quanto esperava.', '2024-10-09'),
(5, 5, 4, 'Uma ótima leitura para fãs de ficção científica.', '2024-10-10');