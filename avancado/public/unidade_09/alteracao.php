<?php require_once("../../conexao/conexao.php"); ?>


<?php

$transp = " SELECT * FROM transportadoras ";

if(isset($_GET["codigo"])){
    $id = $_GET["codigo"];
    $transp .= "WHERE transportadoraID = {$id} ";
}else{
    $transp .= "WHERE transportadoraID = 1 ";
}

$con_transp = mysqli_query($conecta, $transp);

if(!$con_transp){
    die("ero no banco de dados");
}else{
    $info_transp = mysqli_fetch_assoc($con_transp);
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
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
            <div id="janela_formulario" >
                <form action="alteracao.php" method="post">
           

                <h2>Alteração de transportadora</h2>
                

                <label for="nometransportadora"> Nome da Transportadoa </label>
                <input type="text" value=" <?php echo $info_transp["nometransportadora"] ?>" name="nometransportadora">
                    <!--  -->
                
                <label for="endereco"> Endereço </label>
                <input type="text" value=" <?php echo $info_transp["endereco"]; ?>" name="endereco">
                    <!--  -->
                
                <label for="cidade"> Cidade </label>
                <input type="text" value=" <?php echo $info_transp["cidade"]; ?>" name="cidade">
                    <!--  -->
                
                <label for="estados"> Estados </label>
                <select name="estados" id="estados">
                    <!-- <option value="1">tarcisio</option> -->
                </select>
                    <!--  -->
                
                <label for="cep"> Cep </label>
                <input type="text" value=" <?php echo $info_transp["cep"]; ?>" name="cep">
                        <!--  -->
                
                <label for="telefone"> Telefone </label>
                <input type="text" value=" <?php echo $info_transp["telefone"]; ?>" name="telefone">
                        <!--  -->
                
                <label for="cnpj"> Cnpj </label>
                <input type="text" value=" <?php echo $info_transp["cnpj"]; ?>" name="cnpj">
                        <!--  -->
                
                <input type="hidden" name="transportadoraID" value=" <?php echo $info_transp["transportadoraID"]; ?>" >
                                    <!--  -->
                
                <input type="submit" name="" value="Confirmar Alteração">
   


                
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