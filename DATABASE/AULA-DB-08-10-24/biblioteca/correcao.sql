ALTER TABLE membros
ADD COLUMN rg int; --adicionar uma coluna

ALTER TABLE membros
CHANGE COLUMN telefone telefone_celular varchar(15); --renomeando coluna

ALTER TABLE livros
MODIFY COLUMN quantidade_copiadas SMALLINT; --alterando tipagem da coluna

ALTER TABLE membros
DROP COLUMN rg; --removendo coluna da tabela

------------------------------------------------------
ALTER TABLE livros
ADD COLUMN ano_publicacao YEAR; 

ALTER TABLE livros
DROP COLUMN ano_publicacao; --ANTIGO
-----------------------------------
ALTER TABLE membros
CHANGE COLUMN sobrenome apelido VARCHAR(100);

ALTER TABLE membros
CHANGE COLUMN apelido sobrenome VARCHAR(100); -- ANTIGO
------------------------------------------
ALTER TABLE membros
MODIFY COLUMN email VARCHAR(150);

ALTER TABLE membros
MODIFY COLUMN email VARCHAR(100); -- ANTIGO

----------------------------------------
ALTER TABLE membros
DROP COLUMN data_nascimento;

ALTER TABLE membros
ADD COLUMN data_nascimento date; --ANTIGO

----------------------------------- selects

SELECT * FROM membros
WHERE membros.sobrenome = "Oliveira";

SELECT * FROM livros
WHERE livros.genero = "Ficção Científica";

SELECT * FROM emprestimos
WHERE emprestimos.id_membro = 3;

SELECT * FROM avaliacoes
WHERE avaliacoes.nota < 4;

SELECT * FROM livros
WHERE livros.data_publicacao > "2000-01-01";

SELECT membros.nome,
       membros.sobrenome
FROM membros
WHERE membros.nome = "Carlos" AND
      membros.sobrenome = "Santos";

SELECT emprestimos.id_livro,
       emprestimos.data_emprestimo
FROM emprestimos
WHERE emprestimos.status = "ativo" AND
      emprestimos.id_membro = 1

SELECT avaliacoes.id_livro,
       avaliacoes.nota,
       avaliacoes.comentario
FROM avaliacoes
WHERE avaliacoes.nota = 5 OR 
      avaliacoes.comentario LIKE "%excelente%"

SELECT livros.titulo,
       livros.data_publicacao,
       livros.quantidade_copiadas
FROM livros
WHERE livros.data_publicacao < "2010-01-01" AND
      livros.quantidade_copiadas > 5;