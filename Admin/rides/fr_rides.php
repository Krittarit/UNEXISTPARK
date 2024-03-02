<?php  
    include 'connect.php'
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="../../image/logo.png" type="image/x-icon" >

    <title>UNEXIST-ADMIN-ride table</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
    <link href="css/style-form2.css" rel="stylesheet">
 </head>
 <body>
    <div class="container">
          <h1 class="title">เพิ่มข้อมูลสมาชิก</h1>
          <form method="POST" action="insert_rides.php">
                <div class="main-info">
                    <div class="inbox">
                        <label>ชื่อเครื่่องเล่น:</label>
                        <input type="text" name="name"  class="form-control"  placeholder="...ชื่อเครื่่องเล่น" > <br>
                    </div>
                    <div class="inbox">
                        <label>วันที่เปิดให้บริการ:</label>
                        <input type="date" name="debut"  class="form-control"  placeholder="...วันที่เปิดให้บริการ" > <br>
                    </div>
                    <div class="inbox">
                        <label>วันที่ปิดปรับปรุง:</label>
                        <input type="date" name="maintenance"  class="form-control"  placeholder="...วันที่ปิดปรับปรุง" > <br>
                    </div>
                    <div class="inbox">
                        <label>ระดับความอันตราย:</label>
                        <input type="number" name="level"  class="form-control"  placeholder="...ระดับความอันตราย"> <br>
                    </div>
                    <div class="button">
                        <input class="btn btn-success" type="submit" value="submit"  >
                    </div>
                    <div class="cancel">
                        <a href="table_ride.php" class="btn btn-danger ">Cancel</a>
                    </div>
                </div>
            </form>
    </div>
 </body>
 </html>