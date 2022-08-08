/*pesoa e quantidade de produto que a pesoa comprou*/
/*
select nomecompleto, nomeproduto, count(pedidoID) as total 

from clientes c
left join pedidos p on c.clienteID = p.clienteID
left join produtos pr on c.clienteID = pr.produtoID
group by c.clienteID
order by total desc
*/

/*relacionamento por agrupamento*/
/*nome e somatoria de pedidos*/
/*pagamento comfirmado pendente canselado canselado pela enpresa*/
select ps.nomestatus, sum(valor_pedido)
from pedidos p
inner join pedidos_status ps on p.status_pedido = ps.statusID
 group by status_pedido

