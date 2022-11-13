<?php
include 'condb.php';
$id=$_POST['id_mem'];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$room=$_POST['room'];
$time=$_POST['time'];
$telephone=$_POST['telephone'];

$sql = "UPDATE member set name ='$f_name',lastname ='$l_name',room ='$room',time ='$time',telephone ='$telephone' WHERE id = '$id' " ;
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showmember.php';</script>";
}else{
    echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');</script>";

}
mysqli_close($conn)

?>