<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>




<body>
  <?php
  if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatosPermitidos)):
      $pasta = "arquivos/";
      $temporario = $_FILES['arquivo']['tmp_name'];
      $novoNome = uniqid().".$extensao";  

      if(move_uploaded_file($temporario, $pasta.$novoNome)):
        $mensagem = "Upload feito com sucesso";
      else:
        $mensagem = "não foi posivel fazer up";
      endif;
    else:
      $mensagem = "form ato invaliddo";
    endif;
    echo $mensagem;
  endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="arquivo"> 
  <input type="submit" name="enviar-formulario"> 
</form>


</body>
</html>