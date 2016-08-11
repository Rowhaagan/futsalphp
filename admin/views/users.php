
	<script>
		
		$(document).ready(function() {
			
			Dropzone.autoDiscover = false;
			
			var myDropzone = new Dropzone("#avatar-dropzone");
	
		});
	
	</script>




<div class="container" style="padding-top:100px;">
	<h4>User Manager</h4>
	<div class="row">
					<div class="col-sm-5 col-md-3">
						
						<div class="list-group">
						<a class="list-group-item" href="?page=users">
							<i class="fa fa-plus"></i>Add New User
						</a>
							<?php

								$query="SELECT * FROM users ORDER BY user_first_name ASC";
								$result=mysqli_query($conn, $query);

								while($list = mysqli_fetch_assoc($result)){ 

									$list = data_user($conn, $list['user_id']);

									//$blurb = substr(strip_tags($list['page_banner_des']), 0, 60);

									?>
									<a class="list-group-item <?php selected($list['user_id'], $opened['user_id'], 'active'); ?>" href="index.php?page=users&id=<?php echo $list['user_id']?>">
										<h4 class="list-group-item-heading"><?php echo $list['fullname'];?></h4>
										<!-- <p class="list-group-item-text"> --><?php //echo $blurb;?><!-- </p> -->
									</a>
							<?php } ?>
							</div>
					</div>
					<div class="col-sm-7 col-md-9">

						<?php if(isset($message)){ echo $message; } ?>


					<form action="index.php?page=users&id=<?php echo $opened['user_id']; ?>" method="post" role="form"> <!-- cancel if you want to -->

						<div class="form-group">
						
							<label for="first_name">First Name:</label>
							<input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $opened['user_first_name']; ?>" placeholder="First Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name:</label>
							<input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $opened['user_last_name']; ?>" placeholder="Last Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="user_email">Email Address:</label>
							<input type="text" name="user_email" id="user_email" class="form-control" value="<?php echo $opened['user_email']; ?>" placeholder="Email Address" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="user_password">Password:</label>
							<input type="password" name="user_password" id="user_password" class="form-control" value="" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="user_confirm_password">Confirm Your Password:</label>
							<input type="password" name="user_confirm_password" id="user_confirm_password" class="form-control" value="" placeholder="Type Your Password Again" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="user_status">User Status</label>
							<select name="user_status" id="user_status" class="form-control">
								<option value="0" <?php if(isset($_GET['id'])){ selected('0', $opened['user_status'], 'selected'); } ?>>Inactive</option>
								<option value="1" <?php if(isset($_GET['id'])){ selected('1', $opened['user_status'], 'selected'); } ?>>Active</option>
							</select>
						</div>
						<button type="submit" class="btn btn-default">Save</button>

						<input type="hidden" name="submitted" value="1">
						<?php if(isset($opened['user_id'])) { ?>
						<input type="text" name="id" value="<?php echo $opened['user_id']; ?>">
						<?php } ?>

					</form>


					<form action="../uploads.php" class="dropzone" id="avatar-dropzone">
						
						<input type="file" name="file">

					</form>	
					</div>
				</div>
</div>