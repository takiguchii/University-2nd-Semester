UPDATE aluno
SET endereco = 'Rua Nova, 987', telefone = '11981234567', email = 'maria.nova@gmail.com'
WHERE id_aluno = 1;

UPDATE aluno
SET endereco = 'Av. Atualizada, 654', telefone = '11982233445', email = 'joao.atualizado@gmail.com'
WHERE id_aluno = 2;

UPDATE aluno
SET endereco = 'Rua da Liberdade, 321', telefone = '11989999888', email = 'ana.liberdade@gmail.com'
WHERE id_aluno = 3;

UPDATE professor
SET email = 'carlos.novo@universidade.com', telefone = '11981231234'
WHERE id_professor = 1;

UPDATE professor
SET email = 'ana.atualizada@universidade.com', telefone = '11982334455'
WHERE id_professor = 2;

UPDATE professor
SET email = 'roberto.novo@universidade.com', telefone = '11983445566'
WHERE id_professor = 3;

UPDATE curso
SET duracao = '5 anos'
WHERE id_curso = 1;

UPDATE curso
SET duracao = '6 anos'
WHERE id_curso = 2;

UPDATE curso
SET duracao = '4 anos'
WHERE id_curso = 3;

UPDATE departamento
SET localizacao = 'Bloco X'
WHERE id_departamento = 1;

UPDATE departamento
SET localizacao = 'Bloco Y'
WHERE id_departamento = 2;

UPDATE departamento
SET localizacao = 'Bloco Z'
WHERE id_departamento = 3;

UPDATE disciplina
SET credito = '5 créditos'
WHERE id_disciplina = 1;

UPDATE disciplina
SET credito = '3 créditos'
WHERE id_disciplina = 2;

UPDATE disciplina
SET credito = '6 créditos'
WHERE id_disciplina = 3;

UPDATE matricula
SET nota_final = 9.0
WHERE id_matricula = 1;

UPDATE matricula
SET nota_final = 8.5
WHERE id_matricula = 2;

UPDATE matricula
SET nota_final = 7.0
WHERE id_matricula = 3;
