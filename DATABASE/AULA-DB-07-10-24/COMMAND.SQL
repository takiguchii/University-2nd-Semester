alter TABLE jogo 
ADD descricao TEXT; -- adicionando um novo campo 

alter TABLE jogo
MODIFY preco DECIMAL(6,2); --muda tipagem do atributo 

alter table cliete
CHANGE nome nome_completo VARCHAR(100); --renomear um atributo

ALTER TABLE estoque
DROP COLUMN data_entrada; -- excluindo uma coluna 

ALTER TABLE compra
DROP FOREIGN KEY compra_ibfk_1;

ALTER TABLE compra
ADD CONSTRAINT fk_cliente_compra 
FOREIGN KEY (id_cliente) REFERENCES cliete(id_cliente); -- adicionando uma nova chave estrangeira

ALTER TABLE compra
DROP FOREIGN KEY fk_cliente_compra;

ALTER TABLE item_carrinho
DROP PRIMARY KEY;