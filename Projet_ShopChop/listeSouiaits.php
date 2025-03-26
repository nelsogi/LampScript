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
                            <p class="nav-item "><strong>Liste de Souhaits</strong></p>
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

        <!-- Liste améliorée des articles disponibles -->
        <div class="container my-5">
            <h2 class="text-center mb-4 fw-bold">Articles recommandés</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Article 1 -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="./img/exampleImgProduit.png" class="card-img-top" alt="Image produit 1">
                        <div class="card-body">
                            <h5 class="card-title">Nom Article 1</h5>
                            <p class="card-text">Cette description met en valeur les caractéristiques uniques de
                                l'article 1.</p>
                            <p class="text-success fw-bold">Prix : 49,99 €</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary">Détails</a>
                            <a href="#" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="./img/exampleImgProduit.png" class="card-img-top" alt="Image produit 2">
                        <div class="card-body">
                            <h5 class="card-title">Nom Article 2</h5>
                            <p class="card-text">Découvrez les fonctionnalités avancées de cet article impressionnant.
                            </p>
                            <p class="text-success fw-bold">Prix : 89,99 €</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary">Détails</a>
                            <a href="#" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="./img/exampleImgProduit.png" class="card-img-top" alt="Image produit 3">
                        <div class="card-body">
                            <h5 class="card-title">Nom Article 3</h5>
                            <p class="card-text">Parfait pour répondre à tous vos besoins quotidiens.</p>
                            <p class="text-success fw-bold">Prix : 59,99 €</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary">Détails</a>
                            <a href="#" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="./img/exampleImgProduit.png" class="card-img-top" alt="Image produit 4">
                        <div class="card-body">
                            <h5 class="card-title">Nom Article 4</h5>
                            <p class="card-text">Un choix idéal pour les amateurs de technologies modernes.</p>
                            <p class="text-success fw-bold">Prix : 75,99 €</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary">Détails</a>
                            <a href="#" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>
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