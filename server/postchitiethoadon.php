<?php 
	include 'connect.php';
	// $json = '[{
	// "id_hoadon": "1",
	// "id_thuoc": "3",
	// "soluong": "2",
	// "giatien": "15000"
	// }]';
	 $json = $_POST['json'];
$data = json_decode($json, true);

foreach ($data as $value) {
	# code...
	$id_hoadon = $value['id_hoadon'];
	$id_thuoc = $value['id_thuoc'];
	$soluong = $value['soluong'];
	$giatien = $value['giatien'];

	$query = "INSERT INTO chitiethoadon(id_cthd,id_hoadon, id_thuoc, soluong, giatien) VALUES
		 (null, '$id_hoadon', '$id_thuoc', '$soluong', '$giatien' ); " ;
		 $query2 = " UPDATE thuoc SET soluong = soluong - '$soluong' where id_thuoc = '$id_thuoc'";

	$Dta = mysqli_query($conn, $query);
	$Dta2 = mysqli_query($conn, $query2);


}

if($Dta){
echo '1';
} else{
echo '0';
}


 ?>