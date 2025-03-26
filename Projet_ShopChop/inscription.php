<?php
define('PATH_TO_ROOT', '.');

require_once PATH_TO_ROOT . '/php/Constantes.php';
require_once PATH_TO_ROOT . '/php/liasonInscription.php';


$erreur = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user    = filter_input(INPUT_POST, 'User', FILTER_SANITIZE_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $mdp     = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $reMdp   = filter_input(INPUT_POST, 'rePassword', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$user || !$email || !$mdp || !$reMdp) {
        $erreur = "Veuillez remplir tous les champs correctement.";
    } elseif ($mdp !== $reMdp) {
        $erreur = ERROR_MDP_RE;
    } else {
        if (userExists($user)) {
            $erreur = ERROR_UTILISATEUR_EXISTANT;
        } elseif (emailExists($email)) {
            $erreur = ERROR_MAIL_EXISTANT;
        } else {
            $result = insertUser($user, $email, $mdp);
            if ($result) {
                // Redirection vers la page de connexion
                header("Location: conection.php");
                exit();
            } else {
                $erreur = "Erreur lors de l'inscription, veuillez réessayer.";
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopChop - Inscription</title>
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
                            <p class="nav-item "><strong>Inscription</strong></p>
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

        <div class="container d-flex justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Formulaire -->
                <form method="post">
                    <div class="mb-3">
                        <label for="User" class="form-label">Utilisateur</label>
                        <input type="text" class="form-control" name="User" id="User" placeholder="Nom d'utilisateur" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="abc@mail.com" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required />
                    </div>
                    <div class="mb-3">
                        <label for="rePassword" class="form-label">Confirmer Mot de passe</label>
                        <input type="password" class="form-control" name="rePassword" id="rePassword" placeholder="Confirmer mot de passe"
                            required />
                    </div>
                    <!-- Bouton submit -->
                    <button type="submit" class="btn btn-info w-100">S'inscrire</button>
                    <?php if (!empty($erreur)): ?>
                        <p class="text-danger mt-2"><strong><?= $erreur ?></strong></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>




        <!-- Section des publicités -->
        <div class="container  p-4 my-4 rounded">
            <div class="row row-cols-2 row-cols-md-5 g-4">
                <div class="col text-center">
                    <img src="./img/pub/Pub1.jpg" class="img-fluid rounded" alt="pub1">
                </div>
                <div class="col text-center">
                    <img src="./img/pub/Pub2.jpg" class="img-fluid rounded" alt="pub2">
                </div>
                <div class="col text-center">
                    <img src="./img/pub/Pub3.png" class="img-fluid rounded" alt="pub3">
                </div>
                <div class="col text-center">
                    <img src="./img/pub/Pub4.jpg" class="img-fluid rounded" alt="pub4">
                </div>
                <div class="col text-center">
                    <img src="./img/pub/Pub6.jpg" class="img-fluid rounded" alt="pub5">
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