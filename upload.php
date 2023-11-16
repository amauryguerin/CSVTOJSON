<?php
// récupération des data via form
$csvUploaded = $_FILES['uploadedFile']['tmp_name'];

// ouverture du fichier csv
$csvRaw = file_get_contents($csvUploaded, 'r');

// séparation data par ligne
$csvLine = explode("\n", $csvRaw);

// analyse csv
$csvData = array_map("str_getcsv", $csvLine);

// encode en json du csv
$csvJsonEncoded = json_encode($csvData, JSON_PRETTY_PRINT);

// définition du nom du fichier
$fileCleanName = str_replace(".csv", "", basename($_FILES['uploadedFile']['tmp_name'])) . ".json";

// création du fichier json et génération du lien de téléchargement
if (file_put_contents("uploads/" . $fileCleanName, $csvJsonEncoded)) {
    echo "<a href='uploads/$fileCleanName' download>Lien de téléchargement du fichier json</a>";
}