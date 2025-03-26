# Script d'Installation et de Configuration LAMP

Ce script Bash automatise la mise à jour du système, l'installation et la configuration d'un environnement LAMP (Linux, Apache, MariaDB, PHP) sur une distribution basée sur Debian/Ubuntu. Il sécurise MariaDB, déploie votre site web et initialise la base de données.

## Prérequis

- **Système** : Distribution Debian/Ubuntu.
- **Accès** : Droits sudo ou accès root.
- **Fichiers du site** : Votre site doit être contenu dans un répertoire (remplacez `REPERTOIRE_DU_SITE` par le nom du dossier correspondant).
- **SQL** : Fichier d'initialisation de la base de données (`dbinit.sql`) situé dans `./REPERTOIRE_DU_SITE/sql/`.

## Contenu du Script

1. **Mise à jour du système**  
   - Mise à jour des listes de paquets : `sudo apt update`  
   - Mise à niveau des paquets installés : `sudo apt upgrade -y`

2. **Installation des paquets**  
   - Installation d'Apache2, PHP, modules PHP, et MariaDB (serveur et client).

3. **Configuration d'Apache2**  
   - Activation du module PHP (`sudo a2enmod php*`)  
   - Redémarrage d'Apache2 pour appliquer les changements.

4. **Configuration de MariaDB**  
   - Activation et démarrage du service MariaDB.  
   - Sécurisation de MariaDB :
     - Suppression des utilisateurs anonymes.
     - Suppression de la base de test et de ses entrées.
     - Exécution de `FLUSH PRIVILEGES;` pour valider les modifications.

5. **Déploiement du site web**  
   - Suppression de la page d'accueil par défaut d'Apache.
   - Copie des fichiers du site depuis `REPERTOIRE_DU_SITE` vers `/var/www/html/`.
   - Attribution des permissions correctes au dossier (`chmod 755` et `chown www-data:www-data`).

6. **Initialisation de la base de données**  
   - Création de la base de données si elle n'existe pas (remplacez `NAME_DATABASE` par le nom souhaité).
   - Importation du fichier SQL d'initialisation (`dbinit.sql`).

## Utilisation

1. **Cloner le dépôt GitHub**  
   Clonez le dépôt contenant le script :
   ```bash
   git clone git@github.com:nelsogi/LampScript.git
   cd LampScript
