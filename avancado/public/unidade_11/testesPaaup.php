<?php require_once("../../conexao/conexao.php"); ?>

<?php
if(isset($_POST["enviar"])){
    
    echo "<pre>";
    print_r($_FILES['upload_file']);
    echo "</pre>";

    echo $_FILES['upload_file']['type']; 
}
?>

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

            <input type="file" name="upload_file" id="">
            <input type="submit" name="enviar">




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