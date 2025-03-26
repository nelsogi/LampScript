#!/bin/bash
sudo apt update
sudo apt upgrade -y

# installation d'apache2 PHP MariaDB
sudo apt install -y apache2 php libapache2-mod-php php-mysql mariadb-server mariadb-client

# Activation du module PHP
sudo a2enmod php*
sudo systemctl restart apache2

# Activation et demarrage du service MariaDB
sudo systemctl enable mariadb.service
sudo systemctl restart mariadb.service

# Securisation de MariaDB 
sudo mysql <<EOF
-- Supprimer les utilisateurs anonymes
DELETE FROM mysql.user WHERE User='';
-- Supprimer la base de test
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';
FLUSH PRIVILEGES;
EOF

# Suppersion de la page daccueil par defaut d Apache
sudo rm -rf /var/www/html/*

# Copie des fishiers dans le repertoire web
sudo cp -r ./Projet_ShopChop/* /var/www/html/

# Attribution des permissions pour le dossier web
sudo chmod -R 755 /var/www/html/
sudo chown -R www-data:www-data /var/www/html

# Creation de la base de donnees
sudo mysql -u root <<EOF
CREATE DATABASE IF NOT EXISTS biblio;
EOF

# importation de la base de donne
sudo mysql -u root biblio < ./Projet_ShopChop/sql/dbinit.sql
