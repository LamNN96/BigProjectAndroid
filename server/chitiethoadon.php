<?php
	include 'connect.php';
	$json = $_POST['json'];

	$data = json_decode($json, true);
	foreach ($data as $value) {
		$id_cthd = $value['id_cthd'];
		$id_hoadon = $value['id_hoadon'];
		$id_thuoc = $value['id_thuoc'];
		$soluong = $value['soluong'];
		$giatien = $value['giatien'];
		$query = "INSERT INTO chitiethoadon (id_cthd, id_hoadon, id_thuoc, soluong,giatien)
		VALUES (null, '$id_hoadon', '$id_thuoc', '$soluong', '$giatien' )";
		$Dta = mysqli_query($conn, $query);


	}

	if($Dta){
		echo '1';
	} else {
		echo '0';
	}
	
?>