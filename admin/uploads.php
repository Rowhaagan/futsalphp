<?php

include('../config/connection.php');

$ds = DIRECTORY_SEPARATOR;  //1
$id = $_GET['id'];

$storeFolder = '../uploads';   //2

$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$newname = time();
$random = rand(100,999);
$name = $newname.$random.'.'.$ext;

// $query = "SELECT avatar FROM users WHERE user_id = $id";
// $result = mysqli_query($conn, $query);
// $old = mysqli_fetch_assoc($result);


$query = "UPDATE users SET avatar = '$name' WHERE user_id = $id";
$result = mysqli_query($conn, $query);

echo $query.'<br>';
echo mysqli_error($conn);
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $name;  //5
 
    move_uploaded_file($tempFile,$targetFile); //6    
    
  //   $deleteFile = $targetPath.$old['avatar'];
	
  //   if($old['avatar'] != '') {
    	
		// if(!is_dir($deleteFile)) {
			
		// 	unlink($deleteFile);
			
		// }

    // }
  
}
?> 
