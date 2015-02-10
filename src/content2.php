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

//Checks if session variable has been set by content1
if(!isset($_SESSION['username'])){
	echo "A username must be entered. Click <a href='login.php'>here</a> to return to the login screen.";
}

//Sets session variables and links to page 2 and log in page
else{
	if(session_status() == PHP_SESSION_ACTIVE){
		if(!isset($_SESSION['visits2'])){$_SESSION['visits2'] = 0;}
		echo "Hello, $_SESSION[username], you have visited this page $_SESSION[visits2] times.</br>";
		$_SESSION['visits2']++;
		echo "You are visiting page two, isn't it wonderful?</br>";
		echo "Click <a href='content1.php'>here</a> to go to page 1.</br>";
		echo "Click <a href='login.php?action=true'>here</a> to log out.</br>";
	}
}

?>
</body>
</html>



