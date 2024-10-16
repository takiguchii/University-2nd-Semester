SELECT livros.id_livro,
        livros.titulo,
        livros.id_autor as autor,
FROM livros

INNER JOIN autores on autores.id_autor = livros.id_autor;

INSERT into(titulo,isbn, data_publicacao,genero, quantidade_copiadas) VALUES
('livro Teste', '1111', '1997-06-26','fantasia', 999)

SELECT livros.id_livro,
        livros.titulo,
        autores.nome as nome_autor,
        autores.sobrenome sobrenome_autor
FROM livros
INNER JOIN autores on autores.id_autor = livros.id_autor;


SELECT livros.id_livro,
        livros.titulo,
        concat(autores.nome," ", autores.sobrenome) as nome_autor
FROM livros
INNER JOIN autores on autores.id_autor = livros.id_autor;

SELECT reservas.data_reserva, 
        reservas.data_reserva,
        reservas.data_expiracao,
        concat(membros.nome, "", membros.sobrenome) as membro, 
        reservas.id_livro
FROM reservas
INNER JOIN membros on membros.id_membro = reservas.id_membro

SELECT reservas.data_reserva, 
        reservas.data_reserva,
        reservas.data_expiracao,
        concat(membros.nome, "", membros.sobrenome) as membro, 
        reservas.id_livro 
FROM reservas
INNER JOIN membros on membros.id_membro = reservas.id_membro
INNER JOIN livros on livros.id_livro = reservas.id_livro;

SELECT autores.nome,
        autores.sobrenome,
        COUNT(livros.id_livros) as total_livros
FROM autores
INNER JOIN livros on autores.id_autor = livros.id_autor
GROUP BY autores.id_autor;

--
SELECT livros.titulo
        COUNT(avaliacoes.id_avaliacao) as total_avaliacoes
FROM livro
INNER JOIN avaliacoes on avaliacoes.id_livro = livros.id_livro
GROUP BY livros.id_livro;

SELECT reservas .data_expiracao,
        livros.titulo,
        concat(membro.nome, " ", membros.sobrenome)as nome_membro,
        membro.telefone,
        autores.nome as autor

FROM reservas

INNER JOIN livros on livros.id_livro = reservas.id_livros
INNER JOIN membros on  membros.id_membro =reservas.id_membro
inner