<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ponto eletronico</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="../style.css">
    <script src="script.js"></script>
</head>

<body class="h-screen">
    <div class="h-full w-full flex flex-col">

        <?php require "/../{$view}.view.php" ?>

        <div class="menu">
            <!-- <div class="img-perfil">
                <a class="nav-link" href="/perfil">
                    <img class="nav-icon" src="https://img.icons8.com/?size=100&id=7819&format=png&color=ffffff" alt="">
                </a>
            </div>
            <div class="bar"></div> -->
            <nav>
                <a class="nav-link" href="/index" rel="noopener noreferrer"><img class="nav-icon"
                        src="https://img.icons8.com/?size=100&id=82767&format=png&color=ffffff" alt=""></a>
                <a class="nav-link" href="/history" rel="noopener noreferrer"><img class="nav-icon"
                        src="https://img.icons8.com/?size=100&id=86125&format=png&color=ffffff" alt=""></a>
                <a class="nav-link" href="/perfil" rel="noopener noreferrer"><img class="nav-icon"
                        src="https://img.icons8.com/?size=100&id=82751&format=png&color=ffffff" alt=""></a>
            </nav>
        </div>

    </div>


    <script></script>

</body>

</html>
