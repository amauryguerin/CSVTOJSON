<?php
class convertToJson
{
    public array $fileUploaded;
    public string $fileTmpName;

    public function convertFileToJson($fileUploaded)
    {
        $this->fileUploaded = $fileUploaded;
        $this->fileTmpName = $this->fileUploaded["tmp_name"];

        $fileRaw = file_get_contents($this->fileTmpName, 'r');

        if ($this->fileUploaded["type"] === "text/csv") {
            $csvLine = explode("\n", $fileRaw);
            $csvData = array_map("str_getcsv", $csvLine);
            $csvJsonEncoded = json_encode($csvData, JSON_PRETTY_PRINT);
            $fileCleanName = basename($this->fileTmpName) . ".json";
            if (file_put_contents("uploads/" . $fileCleanName, $csvJsonEncoded)) {
                echo "<a href='uploads/$fileCleanName' download>Lien de téléchargement du fichier json</a>";
            }
        } else {
            $filechange = str_replace(array("\n", "\r", "\t"), '', $fileRaw);
            $filetrim = trim(str_replace('"', "'", $filechange));
            $resultxml = simplexml_load_string($filetrim);
            $resultjson = json_encode($resultxml);
            $fileCleanName = basename($this->fileTmpName) . ".json";
            if (file_put_contents("uploads/" . $fileCleanName, $resultjson)) {
                echo "<a href='uploads/$fileCleanName' download>Lien de téléchargement du fichier json</a>";
            }
        }
    }
}
