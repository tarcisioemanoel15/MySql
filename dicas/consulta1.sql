/* Pega o menor preco*/
# select min(precounitario) as minimo from produtos

/* Pega o maior preco*/
# select max(precounitario) as maximo from produtos

/* Pega a media de todos os produtos*/
# select avg(precounitario) as media from produtos

/*soma dos pedidos*/
# select sum(valor_pedido) as totalvendidos from pedidos
/*somar um numero por uma data ou um serto tempo*/
# where year(data_pedido) = "2007"

/*quantos produtos são entrege em 5 dias*/
# select count(produtoID) as total from produtos where tempoentrega = 30

/*ver quantidade de produtos e em quantos dias são entregue*/
# select tempoentrega, count(produtoID) as total from produtos group by tempoentrega order by total desc

/*
1 pagamento confirmado, 2 pendente, 
3 canselado pelo cliente e 4 canelado pela enpresa
 */

 select status_pedido, sum(valor_pedido) 
 from pedidos
# where status_pedido <= 3
 group by status_pedido
 having status_pedido <= 3