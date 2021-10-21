<?php
// Kiểm tra có đúng là người dùng đã thực hiện nhấn Lưu trên FORM chưa
if (isset($_GET['btnAdd'])) {
	// Lấy giá trị trên FORM và lưu vào các BIẾN
	$patientid      = $_GET['txtPatientid'];
	$firstname     = $_GET['txtFirstname'];
	$lastname     = $_GET['txtLastname'];
	$dateofbirth      = $_GET['txtDateofbirth'];
	$gender   = $_GET['txtGender'];
	$mobile       = $_GET['txtMobile'];
	$email       = $_GET['txtEmail'];
	$height       = $_GET['txtHeight'];
	$weight       = $_GET['txtWeight'];
	$blood_type    = $_GET['txtBlood_type'];
	$created_on       = $_GET['txtCreated_on'];
	$modified_on       = $_GET['txtModified_on'];

	// Thực hiện quy trình 3 bước:
	// Bước 01: Kết nối DBS
	include './Project/config.php';

	// Bước 02: Khai báo truy vấn
	$sql = "INSERT INTO PATIENT (patientid,firstname, lastname,dateofbirth,gender,mobile, email, height, weight, blood_type, created_on, modified_on)
        VALUES ('$patientid','$firstname','$lastname','$dateofbirth','$gender','$mobile','$mobile','$email','$mobile','$height'
		,'$weight',	'$blood_type', '$created_on', '$created_on')";

	echo $sql . "<br>";

	if (mysqli_query($conn, $sql) == TRUE) {
		echo "Thêm thành công";
		header("Location: index.php");
	} else {
		echo "Chưa thêm được ....";
	}
	// Bước 03: Đóng kết nối
	mysqli_close($conn);
}
?>
