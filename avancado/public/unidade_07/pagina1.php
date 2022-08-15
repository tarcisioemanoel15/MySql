<?php require_once("../../conexao/conexao.php"); ?>

<?php
        //ISSO PARA PROTEGER A PAGINA
        // criar inicial da variavel de secao
        session_start();
        // direcionando para pagina de login
        if(!isset($_SESSION["user_portal"])){
            header("location:login.php");
        }




//definir valor
$_SESSION["usuario"] = "Andressa";
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
                <a href="pagina2.php">pagina2</a>
            </p>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>