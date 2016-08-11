<?php

// function striped_data($body){
// 	$data['bodywith_nohtml'] = strip_tags($data['body']);
// 			if($data['body'] == $data['bodywith_nohtml']){
// 				$data['body_formatted'] = '<p>'.$data['body'].'</p>';
// 			} else {
// 				$data['body_formatted'] = $data['body'];
// 			}
// }




function data_setting_value($conn, $id){
	$query ="SELECT * FROM settings WHERE setting_id = '$id'";
	$result = mysqli_query($conn, $query);

	$data = mysqli_fetch_assoc($result);
	return $data['setting_value'];
}



function data_page($conn, $id){
	// Page Setup(Data)
	if(is_numeric($id)){
		$cond = "WHERE page_id = $id";
	} else{
		$cond = "WHERE page_slug = '$id'";
	}
	$query = "SELECT * FROM pages $cond";
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($result);

			// incase we put html in database

		$data['bodywith_nohtml'] = strip_tags($data['page_banner_des']);
			if($data['page_banner_des'] == $data['bodywith_nohtml']){
				$data['body_formatted'] = '<p>'.$data['page_banner_des'].'</p>';
			} else {
				$data['body_formatted'] = $data['page_banner_des'];
			}

	return $data;
}

?>