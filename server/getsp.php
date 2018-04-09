<?php
	include 'connect.php';
	$query = "SELECT * FROM thuoc";
	$data = mysqli_query($conn, $query);

	$mangsp = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($mangsp, new thuoc(
			$row['id_thuoc'],
			$row['id_danhmuc'],
			$row['id_donvi'],
			$row['gianhap'],
			$row['giaxuat'],
			$row['tenthuoc'],
			$row['motasanpham'],
			$row['soluong']));
	};
	echo json_encode($mangsp);

	/**
	* 
	*/
	class thuoc {
		
		function thuoc($id_thuoc, $id_danhmuc,
		 $id_donvi, $gianhap, $giaxuat,
		 $tenthuoc, $motasanpham, $soluong)
		{
			$this->id_thuoc = $id_thuoc;
			$this->id_danhmuc = $id_danhmuc;
			$this->id_donvi = $id_donvi;
			$this->gianhap = $gianhap;
			$this->giaxuat = $giaxuat;
			$this->tenthuoc = $tenthuoc;
			$this->motasanpham = $motasanpham;
			$this->soluong = $soluong;
		}
	}
	
?>