<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองห้อง</title>
       <!-- CSS only -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container"> 
    <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">รายการสมาชิกจองห้อง</div>
    <a  href="add_member.php" class="btn btn-primary mb-4 " >เพิ่ม+</a>
    <table  class="table table-striped">
        <tr>
            <th>รหัสสมาชิก</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
            <th>เวลา</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

</tr>
<?php
$sql = "SELECT * FROM member";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>




<tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["lastname"]?></td>
    <td><?=$row["room"]?></td>
    <td><?=$row["time"]?></td>
    <td><?=$row["telephone"]?></td>
    <td><a href = "edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning" >แก้ไข</a></td>
    <td><a href = "delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;">ลบ</a></td>
    
</tr>
<?php
}
mysqli_close($conn);
?>
</table>
</div>
</body>
</html>

<script language="JavaScript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
        if(agree){
        window.location=mypage;
        }
    }
</script>