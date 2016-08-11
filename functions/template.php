<?php 

function nav_main($conn, $path){
	$query = "SELECT * FROM pages";
	$result = mysqli_query($conn, $query);
	while($nav = mysqli_fetch_assoc($result)){ ?>
		<li<?php selected( $path['call_parts'][0], $nav['page_slug'], ' class="active"');?> ><a href="<?php echo $nav['page_slug'] ?>"><?php echo $nav['page_title'] ?></a></li>

<?php 	}
}

?>