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
                            <p class="nav-item "><strong>Achats</strong></p>
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

        <!-- Formulaire de paiement avec Bootstrap -->
        <div class="container my-5 p-4 border rounded shadow-sm">
            <h2 class="text-center mb-4">Formulaire de Paiement</h2>
            <form id="FormulaireAchat" method="post">
                <div class="row mb-3">
                    <!-- Informations personnelles -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom:</label>
                            <input type="text" id="nom" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom:</label>
                            <input type="text" id="prenom" class="form-control" placeholder="Votre prénom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" class="form-control" placeholder="Votre email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Téléphone:</label>
                            <input type="tel" id="telephone" class="form-control"
                                placeholder="Votre numéro de téléphone" required>
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse:</label>
                            <input type="text" id="adresse" class="form-control" placeholder="Votre adresse" required>
                        </div>
                    </div>

                    <!-- Informations de carte -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="carte" class="form-label">Carte:</label>
                            <input type="text" id="carte" class="form-control" placeholder="Numéro de carte" required>
                        </div>
                        <div class="mb-3">
                            <label for="csv" class="form-label">CSV:</label>
                            <input type="text" id="csv" class="form-control" placeholder="Code CSV" required>
                        </div>
                        <div class="mb-3">
                            <label for="expiration" class="form-label">Expiration:</label>
                            <input type="text" id="expiration" class="form-control" placeholder="MM/AA" required>
                        </div>
                        <div class="mb-3">
                            <p class="fs-5">Prix : <span id="PrixTotal" class="fw-bold">1000.- €</span></p>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-secondary px-4 btn-lg text-white" href="index.php">Annuler</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success px-5 btn-lg">Payer</button>
                    </div>
                </div>
            </form>
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