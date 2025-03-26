<?php

require_once PATH_TO_ROOT . '/php/database.php';
require_once PATH_TO_ROOT . '/php/Constantes.php';


function userExists($user)
{
    $stmt = db()->prepare("SELECT COUNT(*) FROM utilisateur WHERE nomUser = :user");
    $stmt->execute(['user' => $user]);
    return $stmt->fetchColumn() > 0;
}

// Vérifie si l'email est déjà utilisé
function emailExists($email)
{
    $stmt = db()->prepare("SELECT COUNT(*) FROM utilisateur WHERE mailUser = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetchColumn() > 0;
}

// Insère un nouvel utilisateur dans la base de données
function insertUser($user, $email, $mdp)
{
    // Stocker le mot de passe en clair (pour ce test seulement)
    $stmt = db()->prepare("INSERT INTO utilisateur (nomUser, mailUser, passwordUser) VALUES (:user, :email, :mdp)");
    return $stmt->execute(['user' => $user, 'email' => $email, 'mdp' => $mdp]);
}
