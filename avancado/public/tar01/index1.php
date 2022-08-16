
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
$_images  = "SELECT codigoID, nomecompleto, imagemG, imagemP ";
$_images  .= " FROM primeiraAG ";
$resultado  = mysqli_query($conecta, $_images);
if(!$resultado){ die("falha no banco"); }
?>
<!-- FIM indo buscar conteudo no banco -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    li{list-style: none;}
  </style>
</head>
<body>
  
<?php while($linha = mysqli_fetch_assoc($resultado)){ ?> 

<a href="deta.php?cod=<?php echo $linha["codigoID"] ?>">
  <?php echo $linha["nomecompleto"] ?>  <br>
</a>

  

<ul>
  <li>
    <a href="deta.php?cod=<?php echo $linha["codigoID"] ?>">
      <img src=" <?php echo $linha['imagemP'] ?>" >
    </a>
  </li>
</ul>

  <?php } ?>
</body>
</html>