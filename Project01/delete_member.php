<?php
include 'condb.php';
$ids=$_GET['id'];
$sql="DELETE FROM member WHERE id='$ids'";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเสร็จสิ้น');</script>";
    echo "<script>window.location='showmember.php';</script>";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
mysqli_close($conn);

?>