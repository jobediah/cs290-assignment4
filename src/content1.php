<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Logged in Page 1</title>
</head>
<body>
<?php
/* Almost all of the syntax was acquired from class lectures. 
Some implementation concepts came from the class discusion board.*/ 

//Checks if POST is empty or null
if(!isset($_SESSION['flag']) && (empty($_POST['username']) || !isset($_POST['username']))){
	echo "A username must be entered. Click <a href='login.php'>here</a> to return to the login screen.";
}

//Sets session variables and links to page 2 and log in page
else{
	if(session_status() == PHP_SESSION_ACTIVE){
		if(!isset($_SESSION['visits'])){$_SESSION['visits'] = 0;}
		if(!isset($_SESSION['username'])){$_SESSION['username'] = $_POST['username'];}
		echo "Hello, $_SESSION[username], you have visited this page $_SESSION[visits] times.</br>";
		$_SESSION['visits']++;
		echo "Click <a href='content2.php'>here</a> to go to page 2.</br>";
		echo "Click <a href='login.php?action=true'>here</a> to log out.</br>";
		$_SESSION['flag'] = true;
	}
}

?>
</body>
</html>



