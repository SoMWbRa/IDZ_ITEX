<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
</head>
<body>
<form action=upload.php method=post enctype=multipart/form-data>
    <input type=file name=fileNameFromForm>
    <input type=submit value=Загрузить></form>
<p> Загруженные файлы:</p>

<?php
$dir  = './files/';
$files = array_diff(scandir($dir), array('.', '..'));
foreach ($files as $file):
    echo "<a href='$dir/$file'> Show </a>" . '&nbsp' . $file  . '<br>';
endforeach;
?>

</body>
</html>