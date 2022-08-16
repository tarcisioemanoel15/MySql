<?php
  //  teste parametro
  if(isset($_GET["cod"])){
    $codigoID = $_GET["cod"];
  }else{
    header("Location:listagem.php");
  }
?>

<!-- chavis para consultar banco -->
<?php
  $servidor   = "localhost";
  $usuario    = "root";
  $senha      = "";
  $banco      = "agenda";
  $conecta    = mysqli_connect($servidor, $usuario, $senha, $banco);
  if(mysqli_connect_errno()){die("conexão falhou: " . mysqli_connect_errno());}
?>
<!-- FIM chavis para consultar banco -->

<!-- indo buscar conteudo no banco -->
<?php
$_images  = "SELECT * ";
$_images  .= " FROM primeiraAG ";
$_images   .= " WHERE  codigoID = {$codigoID} ";
$resultado  = mysqli_query($conecta, $_images);
if(!$resultado){ 
  die("falha no banco");

}
else{
  $dados_detalhes = mysqli_fetch_assoc($resultado);
  $nomecompleto = $dados_detalhes["nomecompleto"];
  /*
  */
    $codigoID = $dados_detalhes["codigoID"];
    $imagemP = $dados_detalhes["imagemP"];
    $imagemG = $dados_detalhes["imagemG"];
}
?>
<!-- FIM indo buscar conteudo no banco -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fazendo alguns testes</title>
  <style>
    body{ background: black;color: white;}
    ul{display: flex}
    li{list-style: none;}
    h1{text-align: center;}
    button{background: blue; text-align: center; display: block}
  </style>
</head>
<body>

<h1> Codigo ID:  <?php echo $codigoID ?> </h1>
  <h1> Nome:  <?php echo $nomecompleto ?> </h1>
  <ul>
    <li> <img src="<?php echo $imagemP ?>" alt=""> </li>
    <li> <img src="<?php echo $imagemG ?>" alt=""> </li>
  </ul>
  <a href="index1.php">
    <button>voltar</button>
</a>

</body>
</html>