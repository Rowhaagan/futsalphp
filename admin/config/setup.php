<?php 
// setup files:

error_reporting(0);

#Dtatabase connection
include('../config/connection.php');

// Constants
DEFINE('D_TEMPLATE', 'template');

// function

include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');

// site setup

$debug = data_setting_value($conn, 'debug-status');

if(isset($_GET['page'])){
	$page = $_GET['page']; //set $pageid to equal the value given the url
} else {
	$page = 'dashboard'; //set $pageid equal to 1 or to the home page
}

// Page Setup
include('config/queries.php');



#user setup

$user = data_user($conn, $_SESSION[username]);

?>