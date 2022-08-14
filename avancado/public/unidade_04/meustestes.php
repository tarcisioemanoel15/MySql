<?php require_once("../../conexao/as.php"); ?>

<?php
    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // Consulta ao banco de dados
    $produtos = "SELECT codigo, produtos, valor ";
    $produtos .= "FROM produtos  ";

    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
  
  <ul>

  <li> <?php echo $linha["produtos"] ?> </li>
  <li> <?php echo $linha["codigo"] ?> </li>
  <li> <?php echo $linha["valor"] ?> </li>


  </ul>
  
  <?php   }   ?>
  
</body>
</html>