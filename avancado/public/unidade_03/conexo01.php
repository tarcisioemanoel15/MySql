<?php
// conexão aque
require_once('../../conexao/conexao.php');

$consulta_produtos  = "SELECT nomeproduto, precounitario, tempoentrega ";
$consulta_produtos  .= " FROM produtos";
$produtos = mysqli_query($conecta, $consulta_produtos);

if(!$produtos){
    die("falha na conexão");
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>

    <ol>
    <?php
                                 //row                           
    while($registro = mysqli_fetch_assoc($produtos)){
    ?>
    
    <li> <?php echo $registro['nomeproduto'] ?> </li>

    <?php } ?>
    </ol>


    <!-- lembrar de fechar para não ficar lento o saite -->
    <?php
        mysqli_free_result($produtos);
    ?>
    </body>
</html>


<?php
mysqli_close($conecta);
?>
