<?php

function AfficherArticles(array $articles)
{
    foreach ($articles as $article) {
        echo '<div class="col">';
        echo '<div class="card h-100 shadow-sm">';
        echo '<img src="' . $article['lienImageArticle'] . '" class="card-img-top" alt="Image de l\'article">';
        echo '<div class="card-body d-flex flex-column">';
        echo '<h5 class="card-title">' . $article['nomArticle'] . '</h5>';
        echo '<p class="card-text">' . $article['petiteDescriptionArticle'] . '</p>';
        echo '<p class="fw-bold text-success">Prix : ' . $article['prixArticle'] . ' €</p>';
        echo '<div class="mt-auto">';
        echo '<a href="detailsArticle.php?id=' . $article['idArticle'] . '" class="btn btn-primary me-2">Détails</a>';
        echo '<a href="#" class="btn btn-outline-primary">Ajouter</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

function RandomArticles(array $article)
{
    echo '<div class="col">';
    echo '<div class="card h-100 shadow-sm">';
    echo '<img src="' . $article['lienImageArticle'] . '" class="card-img-top" alt="Image de l\'article">';
    echo '<div class="card-body d-flex flex-column">';
    echo '<h5 class="card-title">' . $article['nomArticle'] . '</h5>';
    echo '<p class="card-text">' . $article['petiteDescriptionArticle'] . '</p>';
    echo '<p class="fw-bold text-success">Prix : ' . $article['prixArticle'] . ' €</p>';
    echo '<div class="mt-auto">';
    echo '<a href="detailsArticle.php?id=' . $article['idArticle'] . '" class="btn btn-primary me-2">Détails</a>';
    echo '<a href="#" class="btn btn-outline-primary">Ajouter</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
