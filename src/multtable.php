<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Multiply It!</title>
</head>
<body>
<?php
/* General syntax was acquired from class lectures, php.net, and w3schools. 
Some implementation concepts came from the class discusion board.*/ 

//Sets all the get variables
$minColumn = $_GET["min-multiplicand"];
$maxColumn = $_GET["max-multiplicand"];
$minRow = $_GET["min-multiplier"];
$maxRow = $_GET["max-multiplier"];
$error = false;

//Checks if variable does not have entered value
if($minColumn == ""){
	echo "You're missing your min-multiplicand value.</br>";
	$error = true;
}

//Checks if variable is an integer and not a float
elseif((float)$minColumn != (int)$minColumn || !is_numeric($minColumn)) {
	echo "Please enter an integer for min-multiplicand.</br>";
	$error = true;
}


if($maxColumn == ""){
	echo "You're missing your max-multiplicand value.</br>";
	$error = true;
}

elseif((float)$maxColumn != (int)$maxColumn || !is_numeric($maxColumn)) {
	echo "Please enter an integer for max-multiplicand.</br>";
	$error = true;
}

if($minRow == ""){
	echo "You're missing your min-multiplier value.</br>";
	$error = true;
}

elseif((float)$minRow != (int)$minRow || !is_numeric($minRow)) {
	echo "Please enter an integer for min-multiplier.</br>";
	$error = true;
}

if($maxRow == ""){
	echo "You're missing your max-multiplier value.</br>";
	$error = true;
}

elseif((float)$maxRow != (int)$maxRow || !is_numeric($maxRow)) {
	echo "Please enter an integer for max-multiplier.</br>";
	$error = true;
}

//Checks if the min is less than the max
if($minColumn >= $maxColumn){
	echo "Your min-muliplicand needs to be less than your max-multiplicand.</br>";
	$error = true;
}

if($minRow >= $maxRow){
	echo "Your min-muliplier needs to be less than your max-multiplier.</br>";
	$error = true;
}

//Checks if one of the flags were triggered
if($error === false){
	
	$minColumn = (int)$minColumn;
	$maxColumn = (int)$maxColumn;
	$minRow = (int)$minRow;
	$maxRow = (int)$maxRow;
	
	//Set up table
	echo 	"<table border='1' cellpadding='10'>                                                        
      		<thead>
      		<tr>
      		<th>";
	//Set up header row
	for($i = $minRow; $i < $maxRow+1; $i++){
  		echo 	" <th>$i ";
  	}
  	echo 	"</tr> </thead>";
  	echo 	"<tbody>";
  	
  	//Set up the rest of the cells
  	for($i = $minColumn; $i < $maxColumn+1; $i++){
  		echo 	" <tr>
  				<th>$i</th>";
  		for($j = $minRow; $j < $maxRow+1; $j++){
  			echo 	"<td>".($i*$j)."</td>";	
  		}
  	}   
  	echo 	"</tr>
  			</tbody";		
}

?>
</body>
</html>



