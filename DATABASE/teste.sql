-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2024 às 20:18
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faculdade_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `aluno_id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`aluno_id`, `nome`, `curso_id`) VALUES
(1, 'Alice', 1),
(2, 'Bob', 2),
(3, 'Charlie', 1),
(4, 'David', NULL),
(5, 'Eve', 2),
(6, 'Frank', 3),
(7, 'Grace', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `curso_id` int(11) NOT NULL,
  `nome_curso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`curso_id`, `nome_curso`) VALUES
(1, 'Engenharia de Software'),
(2, 'Administração'),
(3, 'Ciência da Computação'),
(4, 'Matemática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `disciplina_id` int(11) NOT NULL,
  `nome_disciplina` varchar(100) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `professor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`disciplina_id`, `nome_disciplina`, `curso_id`, `professor_id`) VALUES
(1, 'Programação', 1, 1),
(2, 'Banco de Dados', 1, 1),
(3, 'Gestão de Projetos', 2, 2),
(4, 'Algoritmos', 3, 3),
(5, 'Finanças', 2, 2),
(6, 'Cálculo', 4, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `professor_id` int(11) NOT NULL,
  `nome_professor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`professor_id`, `nome_professor`) VALUES
(1, 'Prof. Smith'),
(2, 'Prof. Johnson'),
(3, 'Prof. Lee');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`aluno_id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`disciplina_id`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`professor_id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`curso_id`),
  ADD CONSTRAINT `disciplinas_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`professor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





----------------------------------------------------------------------------------------------

SELECT COUNT(alunos.aluno_id) as total_alunos,
       cursos.nome_curso
FROM alunos
INNER JOIN cursos on curso.curso_id = alunos.curso_id
GROUP BY nome_curso
ORDER BY total_alunos DESC --CONTARMOS ALUNOS POR CURSO

---------------------------------------------------------------------------------------------------

SELECT cursos.nome_curso, COUNT(disciplinas.disciplina_id) as
total_disciplina
from cursos
left JOIN disciplinas on disciplinas.cursos_id = cursos.curso_id 
GROUP BY cursos.nome_curso
ORDER BY cusos.nome_curso --conta quantidade de desciplinas

----------------------------------------------------------------------------------------------------

SELECT alunos.nome as aluno,
        cursos.nome_curso
FROM alunos /* Culuna esquerda*/
LEFT JOIN cursos on cursos.curso_id = alunos.curso_id/*Colunas  direita*/
ORDER BY cursos.nome_curso

SELECT cursos.nome_curso, COUNT(disciplinas.disciplinas_id) as
total_disciplina
from cursos
LEFT JOIN disciplina on disciplinas.cursos_id = cursos.curso_id

-----------------------------------------------------------------------------------------------------

SELECT alunos.nome as aluno,
        disciplinas.nome_disciplina,
        curso.nome_curso
FROM alunos /* esquerca */
right JOIN disciplinas on disciplinas.curso_id = alunos.curso_id /* Direita */
right JOIN cursos on cursos.curso_id = disciplina.disciplinas_id
/*DISCIPLINAS QUE TENHAM ALUNOS CADASTRADOS*/

---------------------------------------------------------------------------------------------------------

/* CONTAR O NUMERO DE DISCIPLINAS POR PROFESSORES*/
SELECT professores.nome_professor,
        COUNT(disciplinas.nome_disciplina) as total_disciplina
FROM professores
INNER JOIN disciplinas on disciplinas.professor_id = professors.professor_id
GROUP BY professores.nome_professor
ORDER BY professores.nome_professor

