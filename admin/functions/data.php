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


function data_user($conn, $id){
	if(is_numeric($id)){
		$cond = "WHERE user_id = '$id'";
	}else{
		$cond = "WHERE user_email = '$id'";
	}
	$query="SELECT * FROM users $cond";
	$result= mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($result);
	$data[fullname] = $data[user_first_name].' '.$data[user_last_name];
	$data[reverse_name] = $data[user_last_name].' '.$data[user_first_name];
	return $data;
}


function data_page($conn, $id){
	// Page Setup(Data)
	$query = "SELECT * FROM pages WHERE page_id = $id";
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