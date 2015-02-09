<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Loppity Do!</title>
</head>
<body>
<?php
/* General syntax was acquired from class lectures, php.net, and w3schools. 
Some implementation concepts came from the class discusion board.*/ 

$HTTPMethod = $_SERVER['REQUEST_METHOD'];


if($HTTPMethod === 'GET'){
	$input_array["type"] = "GET";
	if(empty($_GET)){$input_array["parameters"] = null;}
	else {$input_array["parameters"] = $_GET;}
	echo json_encode($input_array);
}

elseif($HTTPMethod === 'POST'){
	$input_array["type"] = "POST";
	if(empty($_POST)){$input_array["parameters"] = null;}
	else {$input_array["parameters"] = $_POST;}
	echo json_encode($input_array);
}
?>
</body>
</html>



