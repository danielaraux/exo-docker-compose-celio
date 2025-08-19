<?php
require_once('products/clothes.php');
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="text-center">
    <h1><a href="accueil.php">Page Accueil</a></h1>

    <h2>Shop</h2>

    <header>
        <nav>
            <div class="d-flex border justify-content-around p-5">
                <a href="accueil.php?cat=t-shirt">T-shirts</a>
                <a href="accueil.php?cat=pantalons">Pantalons</a>
                <a href="accueil.php?cat=sweat-shirts">Sweat-shirts</a>
                <a href="accueil.php?cat=pulls">Pulls</a>
                <a href="accueil.php?cat=chemises">Chemises</a>
            </div>
        </nav>
    </header>


    <main>



    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>