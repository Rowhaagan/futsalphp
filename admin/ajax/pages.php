<?php

include("../../config/connection.php");

$id = $_GET['id']; 
//echo $id;

$query = "DELETE FROM pages WHERE page_id = $id";
$result =  mysqli_query($conn, $query);

if($result){
	echo "Page has been Deleted.";
}
else{
	echo "Page couldnot be deleted.<br/>";
	echo $query.'<br/>';
	echo mysqli_error($conn);
}

?>