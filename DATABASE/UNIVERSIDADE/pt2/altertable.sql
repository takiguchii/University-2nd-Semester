ALTER TABLE departamento
ADD COLUMN telefone_contato VARCHAR(15),
MODIFY COLUMN localizacao VARCHAR(100);

ALTER TABLE disciplina
ADD COLUMN carga_horaria INT,
MODIFY COLUMN credito DECIMAL(3,1);

ALTER TABLE matricula
ADD COLUMN semestre VARCHAR(10),
MODIFY COLUMN nota_final DECIMAL(4,2);
UPDATE departamento
SET telefone_contato = '11987651234', localizacao = 'Bloco A - Edifício Central'
WHERE id_departamento = 1;

UPDATE departamento
SET telefone_contato = '11982334455', localizacao = 'Bloco B - Sala 202'
WHERE id_departamento = 2;

UPDATE disciplina
SET carga_horaria = 60, credito = 4.5
WHERE id_disciplina = 1;

UPDATE disciplina
SET carga_horaria = 45, credito = 3.0
WHERE id_disciplina = 2;

UPDATE matricula
SET semestre = '2024/1', nota_final = 8.75
WHERE id_matricula = 1;

UPDATE matricula
SET semestre = '2024/1', nota_final = 8.50
WHERE id_matricula = 2;


