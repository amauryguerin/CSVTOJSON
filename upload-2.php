<?php
require_once "./Class/convertToJson.php"; 

$convertToJson = new convertToJson;
$convertToJson->convertFileToJson($_FILES['uploadedFile']);