<?php

require_once './php/database.php';


function selectAll()
{
    $statement = db()->prepare("
        SELECT idArticle, nomArticle, petiteDescriptionArticle, descriptionArticle, prixArticle, lienImageArticle, categorieArticle
          FROM Articles
    ");
    $statement->execute();

    return $statement->fetchAll();
}

function selectID($id)
{
    $statement = db()->prepare("
        SELECT idArticle, nomArticle, petiteDescriptionArticle, descriptionArticle, prixArticle, lienImageArticle, categorieArticle
          FROM Articles
          WHERE idArticle = :idArticle
    ");
    $statement->execute(['idArticle' => $id]);

    return $statement->fetch(PDO::FETCH_ASSOC);
}