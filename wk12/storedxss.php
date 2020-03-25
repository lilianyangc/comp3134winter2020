<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>

<?php

$file = fopen("storedxss.txt", "r") or die("unable to open file");
echo fread($file, filesize("storedxss.txt"));
fclose($file);

?>

</body>

</html>
