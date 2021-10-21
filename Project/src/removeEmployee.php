<?php 
if(isset($_GET['patientid'])){
    $conn = mysqli_connect('localhost', 'root','','PATIENT',);
    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
         if(!$conn){
            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
            }
    $id=$_GET['patientid'];
    $sql ="delete from PATIENT where patientid='".$id."'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('location:index.php');
}
?>