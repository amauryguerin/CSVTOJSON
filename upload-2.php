<?php
require_once "./Class/convertToJson.php"; 

$convertToJson = new convertToJson;
$convertToJson->convertFileToJson($_FILES['uploadedFile']);

// $filepath = file_get_contents($_FILES['uploadedFile']['tmp_name']);
// $filechange = str_replace(array("\n", "\r", "\t"), '', $filepath);
// $filetrim = trim(str_replace('"', "'", $filechange));
// $resultxml = simplexml_load_string($filetrim);
// $resultjson = json_encode($resultxml);

// $fileCleanName = basename($_FILES['uploadedFile']['tmp_name']) . ".json";

// if (file_put_contents("uploads/" . $fileCleanName, $resultjson)) {
//     echo "<a href='uploads/$fileCleanName' download>Lien de téléchargement du fichier json</a>";
// }
