<!DOCTYPE html>
<html>
<head>

<title>pliki</title>
</head>
<body>

<?php
$file  = fopen("text", 'r');

$zawartoscPliku =  fread($file,  filesize('text'));

$tablica = split(' ', $zawartoscPliku);
echo gettype($tablica);

fore	ach ($tablica as $i ){

}

fclose($file);
?>
</body>
</html>
