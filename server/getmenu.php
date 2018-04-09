<?php
	include 'connect.php';
	$query = "SELECT * FROM sidemenu";
	$data = mysqli_query($conn, $query);

	$mangmenu = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($mangmenu, new menu(
			$row['id_menu'],
			$row['tenmenu']));
	};
	echo json_encode($mangmenu);

	/**
	* 
	*/
	class menu {
		
		function menu($id_menu, $tenmenu)
		{
			$this->id_menu = $id_menu;
			$this->tenmenu = $tenmenu;
		}
	}
	
?>