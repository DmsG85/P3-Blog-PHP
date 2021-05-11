# P3-Blog-PHP

Codacy Analyzer 

 [![Codacy Badge](https://app.codacy.com/project/badge/Grade/e00ded7cf8ea4e27bf02338e6926fba6)](https://www.codacy.com/gh/DmsG85/P3-Blog-PHP/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DmsG85/P3-Blog-PHP&amp;utm_campaign=Badge_Grade)

Prérquis :
* PHP 7, MySQL, Apache, Composer


# Environnement

* Installer Composer, copier/coller les liens ci-dessous à la racine du projet, dans votre termial :

<code> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');" </code>



* Installer Bootstrap avec Composer :

<code> composer require twbs/bootstrap:5.0.0 </code>
 



* Importer le jeu de données "/myblog.sql" ->(model) vers votre gestionnaire de base de donnée (dbname:"myblog").

* Configurer la base de donnée dans le fichier "model/Database.php", avec vos paramètres de connexion.

* L'adresse du serveur doit pointer à la racine du dossier.
