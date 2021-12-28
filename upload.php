<?php
$uploadDirectory = './files/';
$newFile = $_FILES['fileNameFromForm']['tmp_name'];
$fileName = $_FILES['fileNameFromForm']['name'];

$uploadPath = $uploadDirectory . $fileName;

$didUpload = move_uploaded_file($newFile, $uploadPath);

if ($didUpload) {
    echo "The file " . basename($fileName) . " has been uploaded";
} else {
    echo "An error occurred";
}
?>