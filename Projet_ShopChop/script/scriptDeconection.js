const div = document.querySelector("#connectionDeconnection");

function renderUI() {
  let username = localStorage.getItem("username");

  if (username) {
    // Affiche l'interface "connecté" et ajoute l'écouteur sur le bouton
    div.innerHTML = Connecter(username);
    const buttonDeconnection = document.querySelector("#BoutonDeco");
    if (buttonDeconnection) {
      buttonDeconnection.addEventListener("click", function () {
        localStorage.removeItem("username");
        renderUI();
      });
    }
  } else {
    // Affiche l'interface "déconnecté"
    div.innerHTML = Deconnecter();
  }
}

function Connecter(username) {
  return `
    <ul class="navbar-nav flex-row align-items-center">
      <li class="nav-item me-3">
        <span class="navbar-text h5 mb-0" style="text-transform: uppercase;">${username}</span>
      </li>
      <li class="nav-item">
        <button id="BoutonDeco" class="btn btn-danger" style="font-size:1.25rem;">
          Déconnexion
        </button>
      </li>
    </ul>
  `;
}

function Deconnecter() {
  let html = '<ul class="navbar-nav flex-row mb-2">';
  html += '<li class="nav-item">';
  html +=
    '<a class="nav-link active" aria-current="page" href="conection.php">Connexion</a>';
  html += "</li>";
  html += '<li class="nav-item">';
  html += '<p class="p-2 mb-0">/</p>';
  html += "</li>";
  html += '<li class="nav-item">';
  html +=
    '<a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>';
  html += "</li>";
  html += "</ul>";
  return html;
}

// Initialisation de l'affichage
renderUI();
