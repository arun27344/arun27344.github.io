<?php
include 'condb.php';
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$room = $_POST['room'];
$time = $_POST['time'];
$tel = $_POST['telephone'];

$sql="INSERT INTO member(name,lastname,room,time,telephone) VALUES('$f_name','$l_name','$room','$time','$tel')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกเสร็จสิ้น');</script>";
    echo "<script>window.location='showmember.php';</script>";
}else{
    echo "<script>alert('บันทึกไม่สำเร็จ');</script>";

}
mysqli_close($conn)

?>