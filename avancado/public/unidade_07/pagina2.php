<?php require_once("../../conexao/conexao.php"); ?>

<?php
// criar inicial da variavel de secao
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: pagina1.php");
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>
        <?php echo $_SESSION["usuario"]; ?> <br>
            <p>
                <a href="pagina1.php">pagina1</a>
            </p>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>