<?php

require_once PATH_TO_ROOT . '/php/database.php';
require_once PATH_TO_ROOT . '/php/Constantes.php';

// Connetion
function RecuperationDB(string $pseudo)
{
    $statement = db()->prepare("
    SELECT nomUser, passwordUser FROM `utilisateur` WHERE nomUser = :nameUser;");
    $statement->execute(['nameUser' => $pseudo]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}


function Verification(array|bool $userMDP, string $user, string $mdp)
{
    // Si l'utilisateur n'existe pas
    if (!$userMDP) {
        return ERROR_USER_MDP;
    }

    // Vérifier le mot de passe en comparant les chaînes en clair
    if ($mdp === $userMDP['passwordUser']) {
        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user'] = $user;
        return "success";
    } else {
        return ERROR_USER_MDP;
    }
}
