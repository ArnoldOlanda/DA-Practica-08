<?php
if(!empty($_GET['file'])){
    $carpeta = $_GET['carpeta'];
    $fileName = basename($_GET['file']);
    $filePath = 'C:\\xampp\\htdocs\\ejercicios-propuestos\\carga-archivos\\Upload\\'.$carpeta.'\\'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}