<?php
	include 'connect.php';
	$query = "SELECT id_hoadon FROM hoadon ORDER BY id_hoadon DESC LIMIT 1";
	$data = mysqli_query($conn, $query);
	
	$row =  mysqli_fetch_assoc($data);
	echo $row['id_hoadon'];
	// $mangmenu = array();
	// while ($row = mysqli_fetch_assoc($data)) {
	// 	# code...
	// 	array_push($mangmenu, new menu(
	// 		$row['id_menu'],
	// 		$row['tenmenu']));
	// };
	// echo json_encode($mangmenu);

	// /**
	// * 
	// */
	// class menu {
		
	// 	function menu($id_menu, $tenmenu)
	// 	{
	// 		$this->id_menu = $id_menu;
	// 		$this->tenmenu = $tenmenu;
	// 	}
	// }
	
?>