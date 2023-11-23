<?php
class convertToJson

{
    public array $fileUploaded;
    public string $fileTmpName;
    public string $fileRaw;
    public string $fileJsonEncoded;

    public function getFileContent($fileUploaded)
    {
        $this->fileUploaded = $fileUploaded;
        $this->fileTmpName = $this->fileUploaded["tmp_name"];
        $this->fileRaw = file_get_contents($this->fileTmpName, 'r');
    }

    public function csvToJson()
    {
        $csvLine = explode("\n", $this->fileRaw);
        $csvData = array_map("str_getcsv", $csvLine);
        $csvJsonEncoded = json_encode($csvData, JSON_PRETTY_PRINT);
        $this->fileJsonEncoded = $csvJsonEncoded;
    }

    public function xmlToJson()
    {
        $xmlData = simplexml_load_string($this->fileRaw);
        $xmlJsonEncoded = json_encode($xmlData, JSON_PRETTY_PRINT);
        $this->fileJsonEncoded = $xmlJsonEncoded;
    }

    public function saveJson()
    {
        $fileCleanName = basename($this->fileTmpName) . ".json";
        if (file_put_contents("uploads/" . $fileCleanName, $this->fileJsonEncoded)) {
            echo "<a href='uploads/$fileCleanName' download>Lien de téléchargement du fichier json</a>";
        }
    }

    public function fileToJson()
    {
        $this->getFileContent($_FILES['uploadedFile']);
        if ($this->fileUploaded["type"] === "text/csv") {
            $this->csvToJson();
        } else {
            $this->xmlToJson();
        }
        $this->saveJson();
    }
    
}
