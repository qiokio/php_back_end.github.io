<!DOCTYPE html>
<html>
<head>
	<title>¡Ù—‘¡–±Ì</title>
<meta name="viewport" content="width=device-width" />
	<meta charset="utf-8">
</head>
<body>
<?php
	$files = fopen("./lyb.txt", "r") or exit("Error");
	$str = fread($files, filesize("./lyb.txt"));
	echo $str;
	fclose($files);
?>
</body>
</html>