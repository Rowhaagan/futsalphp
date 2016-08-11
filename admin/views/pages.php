<div class="container" style="padding-top:100px;">
<h4>Page Manager</h4>
				<div class="row">
					<div class="col-sm-5 col-md-3">
						
						<div class="list-group">
						<a class="list-group-item" href="?page=pages">
							<i class="fa fa-plus"></i>Add New Page
						</a>
							<?php

								$query="SELECT * FROM pages ORDER BY page_name ASC";
								$result=mysqli_query($conn, $query);

								while($list = mysqli_fetch_assoc($result)){ 

									$blurb = substr(strip_tags($list['page_banner_des']), 0, 60);

									?>
									<div id="page_<?php echo $list['page_id']; ?>" class="list-group-item <?php selected($list['page_id'], $opened['page_id'], 'active'); ?>">
										<h4 class="list-group-item-heading"><?php echo $list['page_name'];?>
											<span class="pull-right">
												<a href="index.php?page=pages&id=<?php echo $list['page_id']?>" class="btn btn-warning"><i class="fa fa-chevron-right"></i></a>
												<a href="#" id="del_<?php echo $list['page_id']; ?>" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></a>
											</span>
										</h4>
										<p class="list-group-item-text"><?php echo $blurb;?></p>
									</div>
							<?php } ?>
							</div>
					</div>
					<div class="col-sm-7 col-md-9">

						<?php if(isset($message)){ echo $message; } ?>


					<form action="index.php?page=pages&id=<?php echo $opened['page_id']; ?>" method="post" role="form"> <!-- cancel if you want to -->

						<div class="form-group">
							<label for="user">User's Name:</label>
							<select name="user" id="user" class="form-control">
								<option value="0">No User</option>
								<?php
								$query="SELECT user_id FROM users ORDER BY user_first_name ASC";
								$result=mysqli_query($conn, $query);
								while($user_list = mysqli_fetch_assoc($result)){
									$user_data = data_user($conn, $user_list['user_id']);
									?>
									<option value="<?php echo $user_data['user_id']; ?>" 
									<?php 
									if(isset($_GET['id'])){
										selected($user_data['user_id'], $opened['user_id'], 'selected');
									} else {
										selected($user_data['user_id'], $user['user_id'], 'selected'); 
										// here $user['user_id'] is logged in user's id or name
									}
									 
									?> >

									<?php 
									echo $user_data['fullname']; 
									?>
										
									</option>
									<!--here $user_data['user_id'] is user_id field from users table and $opened['user_id'] is user_id field from pages table -->
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
						
							<label for="name">Page Name:</label>
							<input type="text" name="name" id="name" class="form-control" value="<?php echo $opened['page_name']; ?>" placeholder="Page Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="slug">Page Slug:</label>
							<input type="text" name="slug" id="slug" class="form-control" value="<?php echo $opened['page_slug']; ?>" placeholder="Page Slug" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="title">Page Title:</label>
							<input type="text" name="title" id="title" class="form-control" value="<?php echo $opened['page_title']; ?>" placeholder="Page Title" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="banner_text">Page Banner Text:</label>
							<input type="text" name="banner_text" id="banner_text" class="form-control" value="<?php echo $opened['page_banner_title']; ?>" placeholder="Banner Text" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="banner_des">Page Banner Description:</label>
							<textarea name="banner_des" id="banner_des" class="form-control" rows="8" placeholder="Banner Description"><?php echo $opened['page_banner_des']; ?></textarea>
						</div>
						<div class="form-group">
							<label for="banner_btn_text">Page Banner Button Text:</label>
							<input type="text" name="banner_btn_text" id="banner_btn_text" class="form-control" value="<?php echo $opened['page_banner_btn_text']; ?>" placeholder="Banner Button Text" autocomplete="off">
						</div>
						<button type="submit" class="btn btn-default">Save</button>

						<input type="hidden" name="submitted" value="1">
						<?php if(isset($opened['page_id'])) { ?>
						<input type="text" name="id" value="<?php echo $opened['page_id']; ?>">
						<?php } ?>


					</form>
					</div>
				</div>
			</div>
