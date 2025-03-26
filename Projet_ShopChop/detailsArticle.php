<?php

define('PATH_TO_ROOT', '.');

require_once PATH_TO_ROOT . '/php/database.php';
require_once PATH_TO_ROOT . '/php/fonctions.php';
require_once PATH_TO_ROOT . '/php/Affichage.php';

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$Article = selectID($id);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopChop - Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/ShopChop.png">
</head>

<body>
    <header>

        <nav class="navbar fixed-top" style="background: linear-gradient(to right, #1ABFBC, #FF6D3B);">
            <!-- le container -->
            <div class="container-fluid ">
                <!-- La promiere partie du container -->
                <div class="col-4 text-start ">
                    <a class="navbar-brand fs-1" href="index.php">SHOPCHOP</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <p class="nav-item "><strong>Details</strong></p>
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
                                    <a class="nav-link active" aria-current="page" href="listeSouiaits.php">Liste de Souhait</a>
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
        <!-- Détails d'un produit sur une page e-commerce -->
        <div class="container-fluid my-5 p-5 bg-white">
            <div class="row">

                <!-- Image principale et détails du produit -->
                <div class="col-md-5 text-start">
                    <img src="<?php echo $Article['lienImageArticle'] ?>" alt="Photo du produit"
                        class="img-fluid w-100">
                </div>

                <!-- Informations principales -->
                <div class="col-md-4">
                    <h1 class="fw-bold"><?php echo $Article['nomArticle'] ?></h1>
                    <p class="text-muted">Catégorie: <span><?php echo $Article['categorieArticle'] ?></span></p>
                    <div class="mb-4">
                        <span class="fs-3 text-success fw-bold"><?php echo $Article['prixArticle'] ?> €</span>
                        <span class="text-decoration-line-through text-muted ms-2"><?php echo $Article['prixArticle'] * 1.2 ?> €</span>
                    </div>
                    <p class="fs-5">
                        <?php echo $Article['petiteDescriptionArticle'] ?></p>

                    <!-- Boutons de commande -->
                    <!-- <div class="d-flex align-items-center gap-3 mt-4">
                        <button class="btn btn-outline-primary rounded-circle lh-1 fs-4" id="minus"
                            type="button">-</button>
                        <p id="countArticle" class="fs-4 mb-0">1</p>
                        <button class="btn btn-outline-primary rounded-circle lh-1 fs-4" id="add"
                            type="button">+</button>
                    </div> -->

                    <!-- Boutons d'achat -->
                    <div class="mt-5">
                        <button type="button" class="btn btn-dark btn-lg px-5 py-3">Ajouter au panier</button>
                        <button type="button" class="btn btn-outline-success btn-lg px-5 py-3">Acheter maintenant</button>
                    </div>
                </div>
            </div>

            <!-- Détails supplémentaires -->
            <div class="mt-5">
                <h3 class="fw-bold">Description du produit</h3>
                <p class="text-muted fs-5"><?php echo $Article['descriptionArticle'] ?></p>
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