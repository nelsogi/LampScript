# Guide d'Utilisation du Site Web

Ce document présente les étapes nécessaires pour installer, configurer et utiliser le site web développé par Nelson et Erdi. Le site est basé sur PHP et MariaDB et nécessite un environnement serveur dédié (machine virtuelle ou conteneur).<br> Suivez attentivement les instructions ci-dessous pour assurer le bon fonctionnement du site.

---

## Prérequis

Avant de commencer, vérifiez que vous disposez de :

- **Environnement serveur :** Une machine virtuelle (VM) ou un conteneur configuré pour héberger le serveur web et la base de données.
- **Privilèges administrateur :** Accès root ou des droits suffisants pour installer et configurer les logiciels.
- **Connexion Internet :** Pour télécharger les paquets nécessaires.

---

## Logiciels Requis

1. **Apache2**  
   Serveur web utilisé pour héberger et servir les pages du site.

2. **PHP**  
   Langage de script nécessaire pour exécuter le code du site.  

3. **MariaDB**  
   Système de gestion de base de données utilisé pour stocker les données du site.  
   - L’installation de PHPMyAdmin est optionnelle mais recommandée pour faciliter la gestion de la base de données.

---

## Installation et Configuration

### 1. Installation d’Apache2

- **Sur Debian/Ubuntu :**
  ```bash
  sudo apt update
  sudo apt install apache2
  ```
- **Démarrer et activer Apache2 :**
  ```bash
  sudo systemctl start apache2
  sudo systemctl enable apache2
  ```

### 2. Installation de PHP

- **Installation de PHP et modules nécessaires :**
  ```bash
  sudo apt install php libapache2-mod-php php-mysql
  ```
- **Redémarrage d’Apache2 :**
  ```bash
  sudo systemctl restart apache2
  ```

### 3. Installation de MariaDB

- **Installation de MariaDB :**
  ```bash
  sudo apt install mariadb-server
  ```
- **Sécurisation de MariaDB :**
  ```bash
  sudo mysql_secure_installation
  ```
- **(Optionnel) Installation de PHPMyAdmin :**
  ```bash
  sudo apt install phpmyadmin
  ```
  Pensez à configurer PHPMyAdmin pour qu’il soit intégré à Apache si nécessaire.

### 4. Déploiement du Site

- **Copie des fichiers :**  
  Placez les fichiers du site dans le répertoire racine d’Apache (généralement `/var/www/html`).
- **Configuration de la connexion à la base de données :**  
  Modifiez le fichier de configuration (par exemple `config.php`) pour renseigner les identifiants et le nom de la base MariaDB.

---

## Fonctionnalités Actuelles

Le site comprend les pages suivantes :

- **Page d'accueil :** Vue principale présentant le site.
- **Liste des articles :** Affiche les articles disponibles.
- **Détails des articles :** Présente les informations détaillées sur un article sélectionné.
- **Inscription / Connexion :** Interface pour créer un compte ou se connecter *(fonctionnalité interface uniquement, sans logique backend complète pour l’instant)*.
- **Liste de souhaits :** Interface permettant de visualiser et gérer les articles souhaités *(interface uniquement)*.
- **Panier :** Interface de gestion des articles sélectionnés pour l'achat *(interface uniquement)*.
- **Achat :** Interface de finalisation de commande *(interface uniquement)*.

---

## Utilisation du Site

1. **Accès :**  
   Ouvrez votre navigateur et accédez à l’adresse de votre serveur (ex. `http://localhost/` ou l’adresse IP de la machine).

2. **Navigation :**  
   Utilisez le menu du site pour naviguer entre les différentes pages.

3. **Tests de l’Interface :**  
   Pour l’instant, certaines pages (Inscription/Connexion, Liste de souhaits, Panier, Achat) servent uniquement à afficher l’interface utilisateur. La logique de traitement (backend) sera développée dans les prochaines étapes.
