<?php
	include 'connect.php';
	$query = "SELECT * FROM danhmucthuoc";
	$data = mysqli_query($conn, $query);

	$mangdanhmucthuoc = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($mangdanhmucthuoc, new danhmucthuoc(
			$row['id_danhmuc'],
			$row['tendanhmuc']));
	};
	echo json_encode($mangdanhmucthuoc);

	/**
	* 
	*/
	class danhmucthuoc {
		
		function danhmucthuoc($id_danhmuc, $tendanhmuc)
		{
			$this->id_danhmuc = $id_danhmuc;
			$this->tendanhmuc = $tendanhmuc;
		}
	}
	
?>