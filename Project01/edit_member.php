<?php
include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array ($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editmember</title>
    <!-- CSS only -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class = "col-sm-5">
        
   
    <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">แก้ไขข้อมูลสมาชิกจองห้อง</div>   
    <form method="POST" action="update_member.php">
    <label>รหัสสมาชิก:</label>
    <input type="text" name="id_mem" class="form-control" value=<?=$row['id']?> >    
    <label>ชื่อ:</label>
    <input type="text" name="fname" class="form-control" value=<?=$row['name']?> > 
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control"value=<?=$row['lastname']?> >
    <label>ห้อง:</label>
    <input type="text" name="room"class="form-control" value=<?=$row['room']?>>
    <label>เวลา:</label>
    <input type="text" name="time"class="form-control" value=<?=$row['time']?>>
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="telephone"  class="form-control"  value=<?=$row['telephone']?> ><br>
    <input type="submit"value="Update" class="btn btn-success mb-4">
    <a href = "showmember.php" class="btn btn-danger mb-4">Cancel</a>


</forn>
</div>
</div>
</div>  
</body>
</html>