<!DOCTYPE html>
<?php include_once "./scripts/info.php";?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div id="container">
        <div id="header">
            <h1>Meu Blog</h1>
        </div>

        <div id="profile">
            <div id="profile-pic">
                <img src=<?php echo $foto?> alt="Foto do perfil">
            </div>
            <div id="profile-info">
                <h2><?php echo $nome?></h2>
                <p><span>Cidade:</span> <?php echo $cidade?></p>
                <p><span>Estado Civil:</span> <?php echo $estado?></p></p>
                <p><span>Interesses:</span> <?php echo $interesses?></p></p>
            </div>
        </div>

        <div id="about-me">
            <h3>Quem sou eu</h3>
            <p><?php echo $texto?></p>
        </div>

        <div id="scraps">
            <h3>Posts:</h3>
            <?php 
            include_once "./scripts/see.php";
            ?>
        </div>

        <div id="friends">
            <h3>Links</h3>
            <a href="https://github.com/SilvestreLago/SNCT_2024" target="_blank" rel="noopener noreferrer">Github</a>
        </div>

        <div id="footer">
            <p>IFBA, SNCT 2024 - Todos os direitos reservados</p>
        </div>
    </div>

</body>
</html>
