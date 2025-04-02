<?php include_once "menu.php"; ?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro de Perfil</title>
</head>

<body>
<main class="fundo">
  <main class="menu container-fluid">
    <div class="menu">
      <?php include_once "menu.php"; ?>
    </div>
    <div class="titulo">
      <h1>CADASTRO DE PERFIL</h1><br>
    </div>
    <form class="align-items-center" action="perfil-salvar.php" method="post" enctype="multipart/form-data">

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Nome Completo:</b></label>
              <input type="text" name="nome" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Email:</b></label>
              <input type="email" name="email" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Profissão:</b></label>
              <input type="text" name="profissao" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Instagram:</b></label>
              <input type="text" name="instagram" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Twitter:</b></label>
              <input type="text" name="twitter" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Facebook:</b></label>
              <input type="text" name="facebook" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Linkedin:</b></label>
              <input type="text" name="linkedin" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Youtube:</b></label>
              <input type="text" name="youtube" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Senha:</b></label>
              <input type="password" name="senhaperfil" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="container text-left">
        <div class="row">
          <div class="col">
          
            <label for="DefaultFile" class="form-label">
              <b>Foto de Perfil:</b>
            </label>
            <input class="form-control" type="file" id="DefaultFile" name="arquivo" accept="image/png, image/jpeg">
            </div>
          
        </div>
        <br>
        <div class="container text-left">
          <div class="row ">
            <label class="form-label"><b>Fundo do Perfil:</b></label>

            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fundo" id="fundo1" value="img/fundo1.jpg" checked>
                <label class="form-check-label" for="fundo1">
                  Fundo 1
                  <div class="card">
                    <img class="card-img" src="img/fundo1.jpg" >
                  </div>
                </label>
              </div>

            </div>
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fundo" id="fundo2" value="img/fundo2.jpg">
                <label class="form-check-label" for="fundo2">
                  Fundo 2
                  <div class="card">
                    <img class="card-img" src="img/fundo2.jpg" >
                  </div>
                </label>
              </div>
            </div>

            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fundo" id="fundo3" value="img/fundo3.jpg">
                <label class="form-check-label" for="fundo3">
                  Fundo 3
                  <div class="card">
                    <img class="card-img" src="img/fundo3.jpg" >
                  </div>
                </label>
              </div>
            </div>

            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fundo" id="fundo4" value="img/fundo4.jpg">
                <label class="form-check-label" for="fundo4">
                  Fundo 4
                  <div class="card">
                    <img class="card-img" src="img/fundo4.jpg" >
                  </div>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label"><b>Descrição</b></label>
          <textarea name="descricao" class="form-control" rows="3"></textarea>
        </div>
        <div class="container text-center">
          <button type="submit" class="btn btn-primary btn-lg">Salvar</button>

        </div>

    </form>
  </main>
</body>

</html>