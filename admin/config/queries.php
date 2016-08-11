<?php 
	switch ($page) {
		
		case 'dashboard':
			# code...
		break;

		case 'pages':
			if(isset($_POST['submitted']) == 1){

						$page_name = mysqli_real_escape_string($conn, $_POST['name']);
						$page_title = mysqli_real_escape_string($conn, $_POST['title']);
						$page_banner_title = mysqli_real_escape_string($conn, $_POST['banner_text']);
						$page_banner_des = mysqli_real_escape_string($conn, $_POST['banner_des']);
						$page_banner_btn_text = mysqli_real_escape_string($conn, $_POST['banner_btn_text']);


						if(isset($_POST['id']) != ''){ # isset hatauda milyo but functiona;;ity ma bigriyo
							$action = "updated";
							$query= "UPDATE pages SET user_id = $_POST[user], page_slug = '$_POST[slug]', page_name = '$page_name', page_title = '$page_title', page_banner_title = '$page_banner_title', page_banner_des = '$page_banner_des', page_banner_btn_text =  '$page_banner_btn_text' WHERE page_id = $_GET[id] ";
						} else {
							$action = "added";
							$query = "INSERT INTO pages (user_id, page_slug, page_name, page_title, page_banner_title, page_banner_des, page_banner_btn_text) VALUES ($_POST[user], '$_POST[slug]', '$page_name', '$page_title', '$page_banner_title', '$page_banner_des', '$page_banner_btn_text')";
						}

					$result=mysqli_query($conn, $query);
					if($result){
						$message = '<p class="alert alert-success"> Page was '.$action.'.</p>';
					}else{
						$message = '<p class="alert alert-danger"> Page could not be '.$action.' because: '.mysqli_error($conn).'</p>';
						$message .= '<p class="alert alert-warning">'.$query.'</p>';
					}

				}

				if(isset($_GET['id'])){
					$opened = data_page($conn, $_GET['id']);
				}

		break;
		
		case 'users':
			if(isset($_POST['submitted']) == 1){

						$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
						$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

						if($_POST['user_password'] != ''){

							if($_POST['user_password'] == $_POST['user_confirm_password']) {

								$user_password = " user_password = sha1('$_POST[user_password]'),";
								$confirm = true;

							}else{

								$confirm = false;

							}
							
						}else{

							$confirm = false;

						}

						if(isset($_POST['id']) != ''){ # isset hatauda milyo but functiona;;ity ma bigriyo

							$action = "updated";

							$query= "UPDATE users SET user_first_name = '$first_name', user_last_name = '$last_name', user_email = '$_POST[user_email]', $user_password user_status = $_POST[user_status] WHERE user_id = $_GET[id] ";
							$result=mysqli_query($conn, $query);

						} else {

							$action = "added";

								$query = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password, user_status) VALUES ('$first_name', '$last_name', '$_POST[user_email]', sha1('$_POST[user_password]'), $_POST[user_status])";

							if($confirm == true){

								$result=mysqli_query($conn, $query);
							}
											
						}

					

					if($result){
						$message = '<p class="alert alert-success"> User was '.$action.'.</p>';
					}else{
						$message = '<p class="alert alert-danger"> User could not be '.$action.' because: '.mysqli_error($conn).'</p>';
						if($confirm == false){
							$message .= '<p class="alert alert-danger"> Password fields doesnot matches or are empty.</p>';
						}
						$message .= '<p class="alert alert-warning">'.$query.'</p>';
					}

				}
				if(isset($_GET['id'])){
					$opened = data_user($conn, $_GET['id']);
				}

		break;
		
		case 'settings':
			if(isset($_POST['submitted']) == 1){

						$setting_label = mysqli_real_escape_string($conn, $_POST['setting_label']);
						$setting_value = mysqli_real_escape_string($conn, $_POST['setting_value']);

						if(isset($_POST['opened_id']) != ''){

							$action = "updated";

							$query= "UPDATE settings SET setting_id = '$_POST[setting_id]', setting_label = '$setting_label', setting_value = '$setting_value' WHERE setting_id = '$_POST[opened_id]'";
							$result=mysqli_query($conn, $query);

						}

					if($result){
						$message = '<p class="alert alert-success"> Setting was '.$action.'.</p>';
					}else{
						$message = '<p class="alert alert-danger"> Setting could not be '.$action.' because: '.mysqli_error($conn).'</p>';
						$message .= '<p class="alert alert-warning">'.$query.'</p>';
					}
				}
		break;
		
		default:
			# code...
		break;
	}
				
?>