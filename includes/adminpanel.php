<?php

if($GLOBALS['user']->get_access() == 2)
{
	echo '
	
	<div id="admin_panel">
	
		<h6>Admin Panel</h6>
		
		<ul>
			<li><a href="profile.php">View profile</a></li>
			<li><a href="product-add.php">Add product</a></li>
			<li><a href="product-edit.php">Edit product</a></li>
			<li><a href="product-delete.php">Delete product</a></li>
			<li><a href="products.php">List products</a></li>
		</ul>

	</div>
	
	
	
	';
	
}


?>