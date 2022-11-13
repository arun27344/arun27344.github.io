
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmember</title>
    <!-- CSS only -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class = "col-sm-5">
        
   
    <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">เพิ่มข้อมูลสมาชิกจองห้อง</div>   
    <form method="POST" action="insert_member.php">
    <label>ชื่อ:</label>
    <input type="text" name="fname" class="form-control" required> 
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control" required>
    <label>ห้อง:</label>
    <input type="text" name="room"class="form-control" required>
    <label>เวลา:</label>
    <input type="text" name="time"class="form-control" required>
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="telephone"  class="form-control" required ><br>
    <input type="submit"  value="ตกลง" class="btn btn-success mb-4">
    <a href = "showmember.php" class="btn btn-danger mb-4">ยกเลิก</a>


</forn>
</div>
</div>
</div>  
</body>
</html>