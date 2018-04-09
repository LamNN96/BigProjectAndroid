<?php

// $mail =$_POST['email'];
// $mk=md5($_POST['encrypted_password']);
// $user ="SELECT * FROM users Where email='$mail' AND encrypted_password='$mk' ";
// define('HOST','mysql.hostinger.vn');
// define('USER','u638679002_hieu');
// define('PASS','123456789');
// define('DB','u638679002_hieu');
//  $con = mysqli_connect(HOST,USER,PASS,DB);
 


// if(isset($check)){
// echo "success";
// }else{
// echo "Sai Email Ho&#7863;c M&#7853;t Kh&#7849;u";
// }
 
// mysqli_close($con);
include 'connect.php';
 $tendangnhap = $_POST['tendangnhap'];
// $tendangnhap = 'admin';
 $matkhau = $_POST['matkhau'];
// $matkhau = 'admin';
$query  = "SELECT * FROM taikhoan Where tendangnhap='$tendangnhap' AND matkhau='$matkhau' ";
// $data = mysqli_query($conn, $query);
// 	// $row =  mysqli_fetch_assoc($data);
// 	$check = mysqli_fetch_array($data);
	  $result = mysqli_query($conn,$query);
	
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active=$row['active'];
      
      $count=mysqli_num_rows($result);
      
      // nếu kết quả là so khớp với $myusername và $mypassword, sẽ có
      // một hàng kết quả
		
      if($count==1)
      {
        echo 'success';
      }
      else 
      {
        echo 'fail';
      }
// $check = mysqli_fetch_array($res);
// 	if(isset($check)){
// 		echo "success";
// 	} else {
// 		echo "fail";
// 	}
?>