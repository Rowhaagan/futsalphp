<?php 

#start session
session_start();

unset($_SESSION['username']);	//Delete the username

// session_destroy();	//this will delete all of the session keys

header('Location: login.php');

?>