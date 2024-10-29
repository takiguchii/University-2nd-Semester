DELETE FROM aluno
WHERE id_aluno = 1;

DELETE FROM aluno
WHERE email = 'joao.atualizado@gmail.com';

DELETE FROM professor
WHERE id_professor = 2;

DELETE FROM professor
WHERE nome = 'Prof. Roberto Lima';

DELETE FROM curso
WHERE id_curso = 1;

DELETE FROM curso
WHERE duracao = '4 anos';

DELETE FROM departamento
WHERE id_departamento = 1;

DELETE FROM departamento
WHERE localizacao = 'Bloco Z';

DELETE FROM disciplina
WHERE id_disciplina = 3;

DELETE FROM disciplina
WHERE nome_disciplina = 'Contabilidade Geral';

DELETE FROM matricula
WHERE id_matricula = 2;

DELETE FROM matricula
WHERE nota_final < 7.0;
