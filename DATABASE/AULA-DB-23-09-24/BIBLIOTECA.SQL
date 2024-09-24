

CREATE TABLE `autores` (
  `autor_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `autores` (`autor_id`, `nome`, `nacionalidade`) VALUES
(1, 'J.K Rowling', 'Britânica'),
(2, 'George Orwell', 'Britânico'),
(3, 'Gabriel García Márquez', 'Colombiano');


CREATE TABLE `emprestimos` (
  `emprestimo_id` int(11) NOT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `emprestimos` (`emprestimo_id`, `livro_id`, `usuario_id`, `data_emprestimo`, `data_devolucao`) VALUES
(6, 2, 2, '2024-09-12', '2024-09-22'),
(7, 3, 1, '2024-09-10', '2024-09-20');


CREATE TABLE `livros` (
  `livro_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `ano_publicacao` int(11) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `autor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `livros` (`livro_id`, `titulo`, `ano_publicacao`, `genero`, `autor_id`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 1997, 'Fantasia', 1),
(2, '1984', 1949, 'Distopia', 2),
(3, 'Cem Anos de Solidão', 1967, 'Realismo Mágico', 3);


CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data_inscricao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `usuarios` (`usuario_id`, `nome`, `email`, `telefone`, `data_inscricao`) VALUES
(1, 'João Pereira', 'joao@gmail.com', '123456789', '2024-09-17'),
(2, 'Maria Oliveira', 'maria@gmail.com', '77777777', '2024-09-16');

--

ALTER TABLE `autores`
  ADD PRIMARY KEY (`autor_id`);


ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `usuario_id` (`usuario_id`);


ALTER TABLE `livros`
  ADD PRIMARY KEY (`livro_id`),
  ADD KEY `autor_id` (`autor_id`);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `autores`
  MODIFY `autor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `emprestimos`
  MODIFY `emprestimo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `livros`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`livro_id`),
  ADD CONSTRAINT `emprestimos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);


ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`autor_id`);
COMMIT;



update usuarios
set telefone = 7777;

select livros.titulo, livros.ano_publicacao from livros;

select * from livros 
where livros.autor_id = 1;

select * from livros 
where livros.autor_id = 1 and 
livros.ano_publicacao >1996;

insert into livros(titulo, ano_publicacao,genero,autor_id)VALUES
("harry potter e o prisioneiro de azkabhan",2004,"fantasia", 1);

insert into livros(titulo, ano_publicacao,genero,autor_id)VALUES
("Animais fantasticos",2019,"fantasia", 1);

select * from livros 
where livros.titulo like "harry%";

select * from livros
where livros.autor_id != 1;