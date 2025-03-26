<?php
require_once './php/fonctions.php';

$Articles = selectAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopChop - Connection</title>
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
                            <p class="nav-item "><strong>Panier</strong></p>
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

        <!-- Container pour afficher un article -->
        <div class="container my-4 p-4 rounded shadow-sm">
            <div class="row align-items-center py-3 mb-3 border-bottom">
                <div class="col-md-2">
                    <img id="imageArticle" src="./img/exampleImgProduit.png" alt="example" class="img-fluid rounded">
                </div>
                <div class="col-md-10">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8">
                            <p id="nomArticle" class="fs-5 fw-bold mb-0">Nom de l'article</p>
                        </div>
                        <!-- <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <button class="btn btn-outline-primary rounded-circle lh-1 fs-5 me-2" id="minus"
                                type="button">-</button>
                            <p id="countArticle" class="mx-2 mb-0">1</p>
                            <button class="btn btn-outline-primary rounded-circle lh-1 fs-5" id="add"
                                type="button">+</button>
                        </div> -->
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Prix: <span id="prixArticle" class="fw-semibold">XX €</span></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" id="supprimer" class="btn btn-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Boutons de navigation -->
            <div class="row text-center pt-3">
                <div class="col">
                    <a class="btn btn-secondary px-4 btn-lg text-white" href="index.php">Annuler</a>
                </div>
                <div class="col">
                    <a class="btn btn-info px-4 btn-lg text-white" href="ListeArtice.php">Retour</a>
                </div>
                <div class="col">
                    <a class="btn btn-success px-4 btn-lg text-white" href="payer.php">Payer</a>
                </div>
            </div>
        </div>



    </main>



    <footer style="background: linear-gradient(to right, #1ABFBC, #FF6D3B);">
        <h4>&copy; 2024 Projet Magasin En Ligne. Tous droits réservés.</h4>
    </footer>
    <script>
        var articles = <?php echo json_encode($Articles); ?>;
        console.log(articles);
    </script>
    <script src="./script/afficherDansPanier.js"></script>
    <script src="./script/scriptDeconection.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>