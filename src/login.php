<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Log in Page</title>
</head>
<body>
<?php
/* Almost all of the syntax was acquired from class lectures. 
Some implementation concepts came from the class discusion board.*/ 

//Destroys session when use links back from content1
if(isset($_GET['action']) && $_GET['action']==true){
		echo "You have successfully logged out.</br>";
		$_SESSION = array();
		session_destroy(); 	
}

// html form
echo "<form action='content1.php' method='post'>
			<label>Please enter your username:</label>
			<input type='text' name='username'>
			<input type='submit' value='Login'>
		</form>"

?>
</body>
</html>




