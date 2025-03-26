// Récupérer le fichier JSON et le stocker dans une variable
fetch("./json/Articles.json")
  .then((response) => response.json()) // Convertir la réponse en objet JSON
  .then((data) => {
    // Stocker les données dans une variable
    const articles = data;

    const articlesContainer = document.getElementById("articles-container");
    // Afficher les données dans la console
    for (let i = 0; i < articles.length; i++) {
      const article = articles[i]; // Récupérer l'article actuel

      // Créer le code HTML pour la carte de l'article
      const articleCard = `
        <div class="col">
    <div class="card h-100 shadow-sm">
        <img src="${article.lienImageArticle}" class="card-img-top" alt="Image de l'article">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">${article.nomArticle}</h5>
            <p class="card-text">${article.petiteDescriptionArticle}</p>
            <p class="fw-bold text-success">Prix : ${article.prixArticle} €</p>
            <div class="mt-auto">
                <a href="detailsArticle.html?id=${article.idArticle}" class="btn btn-primary me-2">Détails</a>
                <a href="#" class="btn btn-outline-primary">Ajouter</a>
            </div>
        </div>
    </div>
</div>

    `;

      // Ajouter la carte au conteneur
      articlesContainer.innerHTML += articleCard;
    }
  });
