<?php 
// setup files:
error_reporting(0);

// Database connection

$conn = mysqli_connect('localhost', 'rowhaagan', 'password', 'merofutsal') OR die('Could not connect because: '. mysqli_connect_error());


// Constants
DEFINE('D_TEMPLATE', 'template');

// function

include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

// site setup

$debug = data_setting_value($conn, 'debug-status');

$path = get_path();

if(!isset($path['call_parts'][0]) || $path['call_parts']['0'] == ''){
	
	header('location: home');

	//$path['call_parts'][0] = 'home'; //set $pageid to equal the value given the url
}

// Page Setup

$page = data_page($conn, $path['call_parts'][0]);



?>