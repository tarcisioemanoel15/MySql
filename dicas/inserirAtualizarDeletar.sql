-- INSERIR
/*inserindo registro no banco de dados*/
-- INSERT INTO `andes`.`estados` (`estadoID`, `nome`, `sigla`) VALUES ('33', 'Silva', 'Si');
-- INSERT INTO  estados(nome, sigla) VALUES ('Santos', 'Sa');


-- ATUALIZAR
-- UPDATE `andes`.`estados` SET `nome` = 'Silvaa' WHERE (`estadoID` = '33');
/*
UPDATE estados 
set nome = 'Andressa',
sigla = 'AN' 
    -- *muito cuidado não pode esquecer where*
where (`estadoID` = '33');
*/



-- DELETAR
--  DELETE FROM `andes`.`estados` WHERE (`estadoID` = '32');
/*
DELETE FROM estados
where estadoID = 34;
*/

