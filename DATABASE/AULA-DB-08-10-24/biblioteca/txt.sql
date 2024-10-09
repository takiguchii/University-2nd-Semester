ALTER TABLE membros
ADD COLUMN rg int; --adicionando uma coluna 

ALTER TABLE membros
CHANGE COLUMN telefone telefone_celular varchar(15);
-- renomeando uma coluna 

ALTER TABLE livros
MODIFY COLUMN quantidade_copiadas SMALLINT; --alterando tipagem da coluna 

ALTER TABLE membros 
DROP COLUMN rg; --removendo uma coluna da tabela  

SELECT membros.nome,
        membros.sobrenome,
FROM membros
WHERE membros.nome = "João" -- selecionando dados especificos strings

SELECT membrosnome,
    membros.sobrenome, 
    membros.id_membro
FROM membros
WHERE membros.nome = "carlos" --utilizando where com and 

--DESC = DESCRECENTE 
--ASK = CRESCENTE 
--LIKE = quando não sabemos o valor que estamos procurando "LIKE "João%"

SELECT * FROM membros
WHERE membros.sobrenome = "Oliveira";

SELECT * FROM livros
WHERE  livros.genero= "ficção Científica";

-- > sintaxe para escolher o maior (condição)