
# Convertisseur de fichier CSV et XML vers JSON en PHP

Ce projet offre une solution simple et efficace pour convertir des fichiers CSV et XML en format JSON à l'aide de PHP.

## VERSION 2

## Contenu du Projet

* version-2.php qui est le nouvel index du projet.
* upload-2.php qui est la nouvelle page d'affichage du résultat.
* convertToJson.php: fichier principal contenant la classe convertToJson qui gère la conversion des fichiers CSV et XML en JSON.
* uploads/: dossier où les fichiers JSON convertis seront enregistrés.

## Architecture

Le projet suit désormais une architecture orientée objet avec une seule classe principale, convertToJson. Cette classe possède plusieurs méthodes qui traitent les différentes étapes du processus de conversion.

* getFileContent(): récupère le contenu du fichier uploadé.
* csvToJson(): convertit le contenu d'un fichier CSV en format JSON.
* xmlToJson(): convertit le contenu d'un fichier XML en format JSON.
* saveJson(): enregistre le fichier JSON converti dans le dossier uploads/ et affiche un lien de téléchargement.
* fileToJson(): méthode principale qui appelle les méthodes nécessaires en fonction du type de fichier uploadé.

## Installation

* Assurez-vous d'avoir un serveur PHP installé sur votre machine (MAMP...).
* Clonez le dépôt sur votre machine.
* Configurez votre serveur web pour qu'il pointe vers le répertoire du projet.

## Utilisation

Sélectionnez un fichier CSV ou XML à convertir en utilisant le bouton "Choisir un fichier" puis cliquer sur le bouton "Convertir".

Vous naviguez vers la page de résultat ou se trouve un lien de téléchargement vers votre nouveau fichier en .json.

## OBSOLÈTE - VERSION 1

### Convertisseur de fichiers CSV vers JSON en PHP

Ce projet offre une solution simple et efficace pour convertir des fichiers CSV en format JSON à l'aide de PHP.

### Contenu du Projet

* index.php qui est l'index du projet.
* upload.php qui est la page de gestion et d'affiche du résultat.

### Architecture

Le projet suit une architecture basique non évolutive mais fonctionnelle.