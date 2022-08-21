<?php require_once("../../conexao/conexao.php"); ?>
<?php    ?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
        
        <style>
            input{
                display:block;
                margin-bottom: 15px;
            }
        </style>

    </head>
    
    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>  
        
        <main>              
            <div id="janela_formulario">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="enviar" name="submit">
                </form>
            </div>
        </main>      

        <?php include_once("../_incluir/rodape.php"); ?>  

    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>