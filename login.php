<?php

    session_start();

    if ( !isset($_SESSION["nome"]) )
    {
        header("location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <style>
        form
        {
            width: 500px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4">

            <h1 class="text-center text-seconary">
                Login no Sistema</h1>

            <form action="login_processa.php" method="post">
                
                <p class="mb-3">
                    Digite o login <br>
                    <input type="text" name="login" class="form-control">
                </p>

                <p class="mb-3">
                    Digite a senha <br>
                    <input type="password" name="senha" class="form-control">
                </p>
                
                <p class="text-center mb-3">
                    <input type="submit" value="Fazer login" class="btn btn-secondary">
                </p>

                <p class="text-danger">
                    <?php
                    
                    session_start();

                    if(isset($_SESSION["erro"]))
                    {
                        echo $_SESSION["erro"];
                    }
                    ?>
                </p>
            </form>

        </div>
    </div>
    
</body>
</html>