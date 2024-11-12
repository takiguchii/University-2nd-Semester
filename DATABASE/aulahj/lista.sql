CREATE DATABASE LISTA_SQL;
USE LISTA_SQL;

CREATE TABLE VENDAS(ID_NF INT,
                    ID_ITEM INT,
                    COD_PROD INT,
                    VALOR_UNIT DECIMAL(4,2),
                    QUANTIDADE INT,
                    DESCONTO INT
                   );

INSERT INTO VENDAS(ID_NF, ID_ITEM, COD_PROD, VALOR_UNIT, QUANTIDADE, DESCONTO)
VALUES
    (1, 1, 1, 25.00, 10, 5),
    (1, 2, 2, 13.50, 3, NULL),
    (1, 3, 3, 15.00, 2, NULL),
    (1, 4, 4, 10.00, 1, NULL),
    (1, 5, 5, 30.00, 1, NULL),
    (2, 1, 3, 15.00, 4, NULL),
    (2, 2, 4, 10.00, 5, NULL),
    (2, 3, 5, 30.00, 7, NULL),
    (3, 1, 1, 25.00, 5, NULL),
    (3, 2, 4, 10.00, 4, NULL),
    (3, 3, 5, 30.00, 5, NULL),
    (3, 4, 2, 13.50, 7, NULL),
    (4, 1, 5, 30.00, 10, 15),
    (4, 2, 4, 10.00, 12, 5),
    (4, 3, 1, 25.00, 13, 5),
    (4, 4, 2, 13.50, 15, 5),
    (5, 1, 3, 15.00, 3, NULL),
    (5, 2, 5, 30.00, 6, NULL),
    (6, 1, 1, 25.00, 22, 15),
    (6, 2, 3, 15.00, 25, 20),
    (7, 1, 1, 25.00, 10, 3),
    (7, 2, 2, 13.50, 10, 4),
    (7, 3, 3, 15.00, 10, 4),
    (7, 4, 5, 30.00, 10, 1);


/* QUESTÃO A*/
SELECT vendas.ID_NF,
       vendas.ID_ITEM,
       vendas.COD_PROD,
       vendas.VALOR_UNIT,
       vendas.DESCONTO
FROM vendas
WHERE vendas.DESCONTO IS NULL

/*QUESTÃO B*/
SELECT vendas.ID_NF,
       vendas.ID_ITEM,
       vendas.COD_PROD,
       vendas.VALOR_UNIT,
       vendas.DESCONTO,
       vendas.VALOR_UNIT - (vendas.VALOR_UNIT * (vendas.DESCONTO/100)) as valor_desconto
FROM vendas
WHERE vendas.DESCONTO is not NULL


/*QUESTÃO C*/
UPDATE vendas
SET vendas.DESCONTO = 0
WHERE vendas.DESCONTO IS NULL

/*QUESTÃO D*/
SELECT vendas.ID_NF,
       vendas.ID_ITEM,
       vendas.COD_PROD,
       vendas.VALOR_UNIT,
       vendas.QUANTIDADE,
       (vendas.QUANTIDADE * vendas.VALOR_UNIT) as valor_total,
       vendas.DESCONTO,
       vendas.VALOR_UNIT - (vendas.VALOR_UNIT * (vendas.DESCONTO/100)) as valor_vendido
 FROM vendas

 /*QUESTÂO E*/
SELECT vendas.ID_NF,
    SUM(vendas.QUANTIDADE = vendas.VALOR_UNIT) as
valor_total
FROM vendas
GROUP BY vendas.ID_NF
order BY valor_total DESC;

/*QUESTÃO F*/
SELECT vendas.ID_NF,
    SUM(vendas.VALOR_UNIT-(vendas.VALOR_UNIT *
                            (vendas.DESCONTO / 100))) as valor_vendido
FROM vendas
GROUP BY vendas.ID_NF
ORDER BY valor_vendido DESC

/*QUESTÂO G*/
SELECT vendas.COD_PROD,
        SUM(vendas.Quantidade) as qtda_vendida
FROM vendas
GROUP BY vendas.COD_PROD
GROUP BY vendas.QUANTIDADE DESC
LIMIT 1

/*QUESTÂO H*/
SELECT vendas.ID_NF,
        vendas.COD_PROD,
        vendas.QUANTIDADEIDADE DESC
LIMIT 10
FROM VENDAS
WHERE vendas.QUANTIDADE > 10
GROUP BY vendas.ID_NF, vendas.COD_PROD

/*QUESTÂO I*/
SELECT vendas.ID_NF,
        SUM(vendas.QUANTIDADE * vendas.VALOR_UNIT) as VALOR Preco_Total
FROM vendas
GROUP BY vendas.ID_NF
HAVING VALOR_TOTAL > 500 
ORDER BY VALOR_TOTAL DESC

/*QUESTÂO J*/
SELECT vendas.COD_PROD,FROM vendasFFROM vendasROM vendas
    ROUND(AVG(vendas.DESCONTO),2) as media_preco
FROM vendas
GROUP BY vendas.COD_PROD

/*QUESTÂO K*/
SELECT vendas.COD_PROD,
        MIN(vendas.DESCONTO) as MENOR,
        MAX(vendas.DESCONTO) as MAIOR,
        ROUND(AVG(vendas.DESCONTO),2)
FROM vendas 
GROUP BY vendas.COD_PROD

/*QUESTÂO L */
SELECT ID_NF, 
       COUNT(ID_ITEM) AS QTD_ITENS
FROM VENDAS
GROUP BY ID_NF
HAVING COUNT(ID_ITEM) > 3;
