<?php  
    include 'connect.php';
    $id = $_GET['ride_id'];
    $sql=" SELECT * FROM rides WHERE ride_id = '$id' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="../../image/logo.png" type="image/x-icon" >

    <title>UNEXIST-ADMIN-ride table EDIT</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-form1.css" rel="stylesheet">
 </head>
 <body>
    <div class="container">
        <h1 class="title">เเก้ไขข้อมูลสมาชิก</h1>
        <form method="POST" action="update_rides.php">
            <div class="main-info">
                <div class="inbox">
                    <label>รหัสเครื่องเล่น:</label>
                    <input type="number" name="ride_id"  class="form-control"  readonly value=<?=$row['ride_id']?> > <br>
                </div>
                <div class="inbox">
                    <label>ชื่อเครื่องเล่น:</label>
                    <input type="text" name="ride_name"  class="form-control"  value=<?=$row['ride_name']?> > <br>
                </div>
                <div class="inbox">
                    <label>วันที่เปิดให้ใช้บริการ:</label>
                    <input type="date" name="date_debut"  class="form-control" value=<?=$row['date_debut']?>  > <br>
                </div>
                <div class="inbox">
                    <label>วันที่ปรับปรุงล่าสุด:</label>
                    <input type="date" name="date_maintenance"  class="form-control"  value=<?=$row['date_maintenance']?> ><br>
                </div>
                <div class="inbox">
                    <label>ระดับความอันตราย:</label>
                    <input type="number" name="level"  class="form-control"  value=<?=$row['level']?> ><br>
                </div>
                <div class="button">
                    <input  type="submit" value="Update" class="btn btn-success" >
                </div>
                <div class="cancel">
                    <a href="table_ride.php" class="btn btn-danger ">Cancel</a>
                </div>
            </div>
        </form>
    </div>
 </body>
 </html>