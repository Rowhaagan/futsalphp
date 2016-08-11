<?php 

#start the session:
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
} 
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
	<head>
		<title>Manfootster | Admin Panel <!-- <?php echo $page['page_name']; ?> --></title>
		<?php include('config/css.php'); ?>
	</head>
	<body>
		<div id="fh5co-page">
			<?php include(D_TEMPLATE.'/navigation.php'); ?>