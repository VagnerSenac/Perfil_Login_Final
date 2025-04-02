<?php include_once "menu.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Perfil</title>
</head>
<body >
<main class="fundo">
<div class="container">
  <div class="row pt-5" >
  <?php  

  include "conexao.php";
  if (empty($_POST['buscar'])) {
    $buscar = "";
  }else{
    $buscar = $_POST['buscar'];
  } 
  $consulta = $conexao->prepare("SELECT * FROM t_perfil WHERE nome LIKE ? OR profissao LIKE ? OR descricao LIKE ?");
  $buscarComCuringa = "%" . $buscar . "%";
  $consulta->bind_param("sss", $buscarComCuringa, $buscarComCuringa, $buscarComCuringa); // "s" indica que o parâmetro é uma string
  $consulta->execute();
  $result = $consulta->get_result();
while ($umaPerfil = $result->fetch_assoc()) {
  ?>
    <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
      <div class="card" style="height:100%" >
        <img class="card-img-top" src="<?php echo $umaPerfil['fundo']; ?>" alt="Bologna">
        <div class="card-body text-center">
          <img class="avatar rounded-circle" src="img\<?php echo $umaPerfil['foto']; ?>">
          <h4 class="card-title"><?php echo $umaPerfil['nome']; ?></h4>
          <h6 class="card-subtitle mb-2 text-muted"> <?php echo $umaPerfil['profissao']; ?></h6>
          <p class="card-text"> <?php echo $umaPerfil['descricao']; ?></p>
          <p>
          <?php 
          if($umaPerfil['instagram'] != ""){?>
            <a href="<?php echo $umaPerfil['instagram']; ?>" class="btn"><i class="bi bi-instagram"></i></a>
            <?php
          } ?>

          <?php 
          if($umaPerfil['linkedin'] != ""){?>        
          <a href="<?php echo $umaPerfil['linkedin']; ?>" class="btn"><i class="bi bi-linkedin"></i></a>
          <?php
          } ?>

          <?php 
          if($umaPerfil['twitter'] != ""){?>  
          <a href="<?php echo $umaPerfil['twitter']; ?>" class="btn"><i class="bi bi-twitter"></i></a>
          <?php
          } ?>


          <?php 
          if($umaPerfil['facebook'] != ""){?>  
          <a href="<?php echo $umaPerfil['facebook']; ?>" class="btn"><i class="bi bi-facebook"></i></a>
          <?php
          } ?>

          <?php 
          if($umaPerfil['youtube'] != ""){?>
          <a href="<?php echo $umaPerfil['youtube']; ?>" class="btn"><i class="bi bi-youtube"></i></a>
          <?php
          } ?>
          </p>
        </div>
      </div>
    </div>
    <?php  
  }
  mysqli_close($conexao);
  ?>
  </div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- fim conteudo -->
</body>
</html>