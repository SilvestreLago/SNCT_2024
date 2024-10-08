<?php 
//VERIFICAÇÃO DE LOGADO
session_start();
if(isset($_SESSION['LOGADO']) == TRUE){
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
                  <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208zM15 0H1v1.89h14z"/>
              </svg>
          Administração do meu blog
          </a>
      </div>
  </nav>
  
  <article style="display: flex; justify-content: center; margin-top: 50px;">
    <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Login</h5>
        </div>
        <form action="./scripts/login.php" method="post">
          <div class="card-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="admin@ifba.edu.br" required name="email">
          </div>
          <div class="mb-3">
            <label for="inputPassword5" class="form-label">Senha:</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="********" required name="passwd">
    
          </div>
          <input type="submit" class="btn btn-primary" value="Login">
          </div>

          <?php //TRATAMENTO DE ERRO.
          if(isset($_GET['erro']) == 'incorrect'){
            echo'<div class="alert alert-danger" role="alert">Email ou senha incorretos.</div>';
          }
          ?>

        </form>
        <div class="card-footer text-body-secondary">
        <a href="https://github.com/SilvestreLago/SNCT_2024" target="_blank" style="color: black;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
          </svg>
        </a>
        </div>
    </div>
  </article>
</body>

</html>