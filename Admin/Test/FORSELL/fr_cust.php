<?php  
    include 'connect.php'
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
 </head>
 <body>
    <div class="container mx-6 ">
        <div class ="row" >
        <div class="col-md-6 mx-auto">   
     <div class=" h4 text-center alert alert-success mb-4 mt-4 " role="alert">เพิ่มข้อมูลสมาชิก</div>
    <form method="POST" action="insert_cust.php">
        
    <label>ชื่อ:</label>
        <input type="text" name="fname"  class="form-control"  placeholder="...ชื่อ" required> <br>
        
        <label>นามสกุล:</label>
        <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" required> <br>

        <label>อายุ:</label>
        <input type="text" name="age"  class="form-control"  placeholder="...อายุ" required> <br>
        
        <label>เบอร์โทรศัพท์:</label>
        <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์"> <br>

        <label>ส่วนสูง:</label>
        <input type="number" name="height"  class="form-control"  placeholder="...ส่วนสูง" required> <br>

        <label>วันที่ซื้อ:</label>
        <input type="date" name="dates"  class="form-control"  placeholder="...วันที่ซื้อ"> <br>
        
        <input class="btn btn-success" type="submit" value="submit"  >
       
        <a href=" " class="btn btn-danger ">Cancel</a>
    </form>
    </div>
    </div>
</div>
 </body>
 </html>