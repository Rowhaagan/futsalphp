<div class="container" style="padding-top:100px;">
	<h4>Site Settings</h4>
	<div class="row">
	
		<div class="col-sm-12 col-md-12">

			<?php if(isset($message)){ echo $message; }?>
			
				<?php
				$query="SELECT * FROM settings ORDER BY setting_id ASC";
				$result=mysqli_query($conn, $query);

				while($opened = mysqli_fetch_assoc($result)){ ?>

					<form class="form-inline" action="index.php?page=settings&id=<?php echo $opened['setting_id']; ?>" method="post" role="form"> <!-- cancel if you want to -->

						<div class="form-group">
						
							<label for="setting_id" class="sr-only">Setting ID:</label>
							<input type="text" name="setting_id" id="setting_id" class="form-control" value="<?php echo $opened['setting_id']; ?>" placeholder="Setting ID Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="setting_label" class="sr-only">Setting Label:</label>
							<input type="text" name="setting_label" id="setting_label" class="form-control" value="<?php echo $opened['setting_label']; ?>" placeholder="Setting Label" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="setting_value" class="sr-only">Setting Status:</label>
							<input type="text" name="setting_value" id="setting_value" class="form-control" value="<?php echo $opened['setting_value']; ?>" placeholder="Setting Value" autocomplete="off">
						</div>
						<button type="submit" class="btn btn-default">Save</button>

						<input type="hidden" name="submitted" value="1">
						<input type="hidden" name="opened_id" value="<?php echo $opened['setting_id']; ?>">

					</form>
					
			<?php } ?>
		</div>
	</div>
</div>