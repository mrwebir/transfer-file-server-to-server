<?php
// URL of the zip file on the source host
$sourceUrl = 'https://source-host.com/path/to/file.zip';

// The path to save the file on the destination host inside the public_html folder
$destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/file.zip'; // public_html/file.zip

$fileContent = file_get_contents($sourceUrl);

if ($fileContent === false) {
    die('Error downloading file from source host');
}

$saveFile = file_put_contents($destinationPath, $fileContent);

if ($saveFile === false) {
    die('Error saving file to public_html folder');
}

echo 'The file was successfully downloaded and saved in the public_html folder';
?>