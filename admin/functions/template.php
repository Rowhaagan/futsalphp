<?php 

function nav_main($conn, $pageid){
	$query = "SELECT * FROM pages";
	$result = mysqli_query($conn, $query);
	while($nav = mysqli_fetch_assoc($result)){ ?>
		<li<?php if($pageid == $nav['page_id']) { echo ' class="active"';}?> ><a href="?page=<?php echo $nav['page_id'] ?>"><?php echo $nav['page_title'] ?></a></li>

<?php 	}
}

?>