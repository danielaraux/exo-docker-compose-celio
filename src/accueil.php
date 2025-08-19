<?php
require_once('products/clothes.php');
var_dump($_GET);

// On change automatiquement les articles au refresh de la page
shuffle($clothes);

$alltypes = [
    'pantalon',
    't-shirt',
    'pull',
    'sweat-shirt',
    'chemise'
];


// Si cat existe (le nom des catégories), alors on stocke sa valeur dans type, sinon, on stocke sa valeur dans la variable noFound
if (isset($_GET["cat"])) {
    $type = $_GET["cat"];
    if (!in_array($type, $alltypes)) {
        $noFound = true;
    }
} else {
    $type = "all";
}
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
    <h1><a href="accueil.php" class="text-decoration-none">Celio by AFPA</a></h1>

    <header>
        <nav>

            <!-- On dit que dans l'url de chaque section ça prendra la catégorie (cat) de la section -->
            <div class="d-flex justify-content-around p-5 w-75 mx-auto">
                <a href="accueil.php" class="text-decoration-none"><b>Tous les articles</b></a>
                <a href="accueil.php?cat=t-shirt" class="text-decoration-none"><b>T-shirts</b></a>
                <a href="accueil.php?cat=pantalon" class="text-decoration-none"><b>Pantalons</b></a>
                <a href="accueil.php?cat=sweat-shirt" class="text-decoration-none"><b>Sweat-shirts</b></a>
                <a href="accueil.php?cat=pull" class="text-decoration-none"><b>Pulls</b></a>
                <a href="accueil.php?cat=chemise" class="text-decoration-none"><b>Chemises</b></a>
            </div>
        </nav>
    </header>


    <main>

        <!-- On crée une condition pour le cas où si une personne change l'url, on va afficher un message d'erreur -->
        <!-- Si noFound existe, on va afficher le message d'erreur -->
        <?php if (isset($noFound)) { ?>
            <p class="">La catégorie <b><?= $type ?></b> n'existe pas</p>
        <?php } else ?>



        <div class="container">
            <div class="row justify-content-center">

                <!-- On crée une boucle foreach pour parcourir le tableau clothes -->
                <!-- Si le type des éléments du tableau sont différents de la variable type et que la variable type a une valeur différente de 'all' -->
                <!-- On continue sans afficher -->
                <?php foreach ($clothes as $items):
                    if ($items['type'] != $type && $type != 'all') {
                        continue;
                    }

                ?>


                    <div class="col-md-4 d-flex justify-content-center my-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/img/<?= $items['main'] ?>" alt="<?= $items['name'] ?>" style="height: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $items['name'] ?></h3>
                                <p class="card-text"><?= $items['gender'] ?></p>
                                <p class="card-text">Description</p>
                                <p class="card-text"><?= $items['size'] ?></p>
                                <p class="card-text"><b><?= number_format($items['price'], 2, ',', ' ') ?> €</b></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>