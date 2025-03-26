<?php

/**
 * Nelson Rossi
 * 02.12.2024
 * Connexion à la BD
 */

require_once './php/secret.php';
/**
 * Fonction pour appeler la base de donnée 
 * @return PDO
 */
function db()
{
    static $db = null;
    if ($db === null) {
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . SCHEMA . ";charset=utf8", USER, PASSWD);

        // Configurer la relation à la DB
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    return $db;
}
