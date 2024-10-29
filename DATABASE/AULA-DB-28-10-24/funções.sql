SELECT COUNT(item_venda.ID_Item_Venda) as quantidade_vendida
FROM item_venda;

SELECT COUNT(jogo.ID_Jogo) as qtde_jogo
FROM jogo
WHERE jogo.Preco > 150;

SELECT SUM(item_venda.Preco_Total) as valor_vendas
FROM item_venda;

SELECT SUM(item_venda.Preco_Total) as receita_cliente
FROM item_venda
WHERE item_venda.ID_Venda IN (SELECT venda.ID_Venda 
    					      FROM venda 
    					      WHERE venda.ID_Cliente = 1);

SELECT SUM(item_venda.Preco_Total) as receita_cliente
FROM item_venda
INNER JOIN venda ON venda.ID_Venda = item_venda.ID_Venda
WHERE venda.ID_Cliente = 1;

SELECT ROUND(AVG(jogo.Preco), 2) as preco_medio
FROM jogo
WHERE jogo.Classificacao_Etaria = "18+";

SELECT item_venda.Quantidade,
       AVG(item_venda.Preco_Total) as media_preco
FROM item_venda
GROUP BY item_venda.Quantidade

SELECT MAX(jogo.Preco) as preco_maximo,
       MIN(jogo.Preco) as preco_minimo
FROM jogo

SELECT UPPER(cliente.Nome) as nome_maiusculo,
       LOWER(cliente.Nome) as nome_minusculo
FROM cliente

SELECT CONCAT(cliente.Nome, " - ", cliente.Email) as nome_email
FROM cliente


SELECT item_venda.ID_Venda,
       item_venda.Preco_Total,
       CASE
       WHEN item_venda.Preco_Total > 250 THEN "Alta"
       ELSE "Baixa"
       END AS classificacao_venda
FROM item_venda

SELECT jogo.Titulo,
	   jogo.Preco,
       CASE
       WHEN jogo.Preco > 200 THEN "Caro"
       ELSE "Barato"
       END AS classificacao_preco
FROM jogo

SELECT venda.Data,
       DAY(venda.Data) as dia_venda,
       MONTH(venda.Data) as mes_venda,
       YEAR(venda.Data) as ano_venda
FROM venda