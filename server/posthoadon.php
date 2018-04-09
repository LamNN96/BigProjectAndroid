<?php
		include "connect.php";
		 $tongsotien = $_POST['tongsotien'];
		// $tongsotien = 200;
		$id_taikhoan = 1;
		$thoigian =  date('Y-m-d H:i:s');
		$query = "INSERT INTO hoadon(id_hoadon, tongsotien, thoigian, id_taikhoan) VALUES
		 (null, '$tongsotien', '$thoigian', '$id_taikhoan' )" ;

		if(mysqli_query($conn, $query)){
			$id_hoadon = $conn->insert_id;
			echo $id_hoadon; 
		} else {
			echo 'that  bai';
		}
?>