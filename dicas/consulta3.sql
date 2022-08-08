/*Quanos produtos tenho por categoria ?*/

-- select categoriaID, count(produtoID) as total
-- from produtos
-- group by categoriaID


select nomecategoria, count(produtoID) as total
from produtos as p
inner join categorias as c on p.categoriaID = c.categoriaID
group by p.categoriaID

