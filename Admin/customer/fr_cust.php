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

    <title>UNEXIST-ADMIN-customer table</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/style-form.css" rel="stylesheet">

 </head>
 <body>
    <div class="container">
           
     <h1 class="title">เพิ่มข้อมูลลูกค้า</h1>
    <form method="POST" action="insert_cust.php">
        <div class="main-info">
            <div class="inbox">
                <label>ชื่อ:</label>
                <input type="text" name="fname"  class="form-control"  placeholder="...ชื่อ" required> <br>
            </div>
            <div class="inbox">
                <label>นามสกุล:</label>
                <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" required> <br>
            </div>
            <div class="inbox">
                <label>อายุ:</label>
                <input type="text" name="age"  class="form-control"  placeholder="...อายุ" required> <br>
            </div>
            <div class="inbox">
                <label>เบอร์โทรศัพท์:</label>
                <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์"> <br>
            </div>
            <div class="inbox">
                <label>ส่วนสูง:</label>
                <input type="number" name="height"  class="form-control"  placeholder="...ส่วนสูง" required> <br>
            </div>
            <div class="inbox">
                <label>วันที่ซื้อ:</label>
                <input type="date" name="dates"  class="form-control"  placeholder="...วันที่ซื้อ"> <br>
            </div>
            <div class="button">
                <input class="btn btn-success" type="submit" value="submit" >
            </div>
            <div class="cancel">
                <a href="table_customer.php" class="btn btn-danger ">Cancel</a>
            </div>
        </div>    
    </form>
</div>
 </body>
 </html>