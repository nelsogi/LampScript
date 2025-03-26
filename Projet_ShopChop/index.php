<?php

define('PATH_TO_ROOT', '.');

require_once PATH_TO_ROOT . '/php/database.php';
require_once PATH_TO_ROOT . '/php/fonctions.php';
require_once PATH_TO_ROOT . '/php/Affichage.php';

$Articles = selectAll();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopChop - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/ShopChop.png">
</head>

<body>
    <header>

        <nav class="navbar  fixed-top" style="background: linear-gradient(to right, #1ABFBC, #FF6D3B);">
            <!-- le container -->
            <div class="container-fluid ">
                <!-- La premiere partie du container -->
                <div class="col-4 text-start ">
                    <a class="navbar-brand fs-1" href="index.php">SHOPCHOP</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <p class="nav-item "><strong>Accueil</strong></p>
                        </li>
                    </ul>
                </div>
                <!-- LOGO SHOP CHOP -->
                <!-- deuxième partie -->
                <div class="col-3 text-center ">
                    <img class="" id="logoSite" src="./img/ShopChop.png" alt="ShopChop">

                </div>
                <!-- troisième partie -->
                <div class="col-4 d-flex justify-content-end align-items-center " id="connectionDeconnection">
                    
                </div>

                <!-- quatrième partie -->
                <div class="col-1 text-end ">
                    <!-- bouton hamburger -->
                    <a href="panier.php"><img src="./img/panier.png" class="m-2" alt="panier" width="20%"
                            height="20%"></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- le offcanvas -->
                    <div class="offcanvas offcanvas-end custom-offcanvas-Height" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Shop Chop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="ListeArtice.php">Liste
                                        Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="listeSouiaits.php">Liste de
                                        Souhait</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="panier.php">Panier</a>
                                </li>
                                <li class="nav-item">
                                    <img id="offlogo" src="./img/ShopChop.png" alt="ShopChop">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

    </header>

    <main>
        <!-- Section de bienvenue -->
        <div class="container  p-4 my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mb-3">Bienvenue sur ShopChop!</h1>
                    <p>Découvrez nos derniers articles en vente, nos meilleures offres et laissez-vous guider par nos
                        partenaires renommés.</p>
                </div>
            </div>
        </div>

        <!-- Section des publicités -->
        <div class="container p-4 my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                <!-- Publicité 1 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded">
                        <img src="./img/pub/Pub1.jpg" class="img-fluid rounded" alt="pub1">
                    </div>
                </div>
                <!-- Publicité 2 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded">
                        <img src="./img/pub/Pub2.jpg" class="img-fluid rounded" alt="pub2">
                    </div>
                </div>
                <!-- Publicité 3 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded">
                        <img src="./img/pub/Pub3.png" class="img-fluid rounded" alt="pub3">
                    </div>
                </div>
                <!-- Publicité 4 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded">
                        <img src="./img/pub/Pub4.jpg" class="img-fluid rounded" alt="pub4">
                    </div>
                </div>
                <!-- Publicité 5 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded">
                        <img src="./img/pub/Pub5.webp" class="img-fluid rounded" alt="pub5">
                    </div>
                </div>
            </div>
        </div>


        <!-- Section Articles Aléatoires -->
        <div class="container my-5">
            <h2 class="text-center mb-4">Articles Populaires</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                <?php

                $randomKeys = array_rand($Articles, 4); // Sélectionne 4 clés uniques

                foreach ($randomKeys as $key) {
                    RandomArticles($Articles[$key]);
                }

                ?>

            </div>

            <!-- Bouton pour afficher tous les produits -->
            <div class="text-end mt-4">
                <a href="ListeArtice.php" class="btn btn-primary">Afficher tous les produits</a>
            </div>
        </div>






    </main>



    <footer style="background: linear-gradient(to right, #1ABFBC, #FF6D3B);">
        <h4>&copy; 2024 Projet Magasin En Ligne. Tous droits réservés.</h4>
    </footer>
    <script src="./script/scriptDeconection.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>