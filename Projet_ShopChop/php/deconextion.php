<?php
require_once PATH_TO_ROOT . '/php/Constantes.php';
require_once PATH_TO_ROOT . '/php/database.php';
require_once PATH_TO_ROOT . '/php/conection.php'; 

function Deconnexion()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Supprimer toutes les variables de session
    $_SESSION = [];

    // Détruire la session
    session_destroy();

    // Rediriger vers la page de connexion
    header("Location: conection.php");
    exit();
}


Deconnexion();

