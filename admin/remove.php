<?php 
//VERIFICAÇÃO DE LOGADO
include_once "./scripts/verf_login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
                    <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208zM15 0H1v1.89h14z"/>
                </svg>
            Administração do meu blog
            </a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="./scripts/sair.php" method="post">
                    <input type="submit" class="btn btn-danger me-md-2" value="Sair">
                </form>
            </div>
        </div>
    </nav>

    <article style="display: flex; justify-content: center; margin-top: 50px;">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Adicionar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="remove.php">Remover</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">Remover postagem:</h5>
        
                <form action="./scripts/remove.php" method="post">
        
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título..." required name="titulo">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        Certeza que deseja remover essa postagem?
                    </label>
                </div>
        
                <input type="submit" value="Remover" class="btn btn-danger">
                </form>
            </div>
            <?php //TRATAMENTO DE ERRO
                 if(isset($_GET['erro']) == 'add'){
                    echo'<div class="alert alert-danger" role="alert">Erro ao remover postagem.</div>';
                }else if(isset($_GET['add']) == 'success'){
                    echo'<div class="alert alert-success" role="alert">Postagem removida com sucesso.</div>';
                  }
            ?>
        </div>
    </article>
</body>
</html>