SELECT cliente.Nome as nome_cliente,
	   jogo.Titulo as jogo_comprado
FROM cliente
INNER JOIN venda ON venda.ID_Cliente = cliente.ID_Cliente
INNER JOIN item_venda on item_venda.ID_Venda = venda.ID_Venda
INNER JOIN jogo on jogo.ID_Jogo = item_venda.ID_Jogo


SELECT jogo.Titulo,
       jogo.Preco,
       fornecedor.Nome as nome_fornecedor
FROM jogo
INNER JOIN fornecedor ON fornecedor.ID_Fornecedor = jogo.ID_Fornecedor

SELECT jogo.Titulo,
       jogo.Preco,
       fornecedor.Nome as nome_fornecedor,
       plataforma.Nome_Plataforma
FROM jogo
INNER JOIN fornecedor ON fornecedor.ID_Fornecedor = jogo.ID_Fornecedor
INNER JOIN jogo_plataforma on jogo_plataforma.ID_Jogo = jogo.ID_Jogo
INNER JOIN plataforma on plataforma.ID_Plataforma = jogo_plataforma.ID_Plataforma