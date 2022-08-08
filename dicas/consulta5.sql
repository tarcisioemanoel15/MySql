-- AVANSADO aaaaaAAAA
-- OBS distinct remove as repeticoes

select nomecompleto, telefone, email
from clientes c
	inner join pedidos p on c.clienteID = p.clienteID
    inner join pedidos_item as pi on pi.pedidoID = p.pedidoID
    where produtoID = 2