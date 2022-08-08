#select nomeproduto, nomefornecedor from produtos, fornecedores
#where produtos.fornecedorID = fornecedores.fornecedorID
/*
select nomeproduto, nomefornecedor 
from produtos as p
inner join fornecedores as f
on p.fornecedorID = f.fornecedorID
*/


/* agora com categorias e produtos*/
/*
select nomeproduto, nomecategoria
from produtos as p
inner join categorias as f
on p.fornecedorID = f.categoriaID
*/

/*
select nomeproduto, nomecategoria, nomefornecedor
from produtos as p
inner join categorias as c on p.categoriaID = c.categoriaID
inner join fornecedores as f on p.fornecedorID = f.fornecedorID
*/


select nomeproduto, nomecategoria, nomefornecedor, nometransportadora
from produtos as p
inner join categorias as c on p.categoriaID = c.categoriaID
inner join fornecedores as f on p.fornecedorID = f.fornecedorID
inner join transportadoras as t on p.fornecedorID = t.transportadoraID
