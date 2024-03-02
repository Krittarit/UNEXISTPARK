<?php  
    include 'connect.php';
    $iD = $_GET['cus_id'];
    $sql=" SELECT * FROM customer WHERE cus_id = '$iD' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
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
    <div class="container ">
        <div class ="row" >
        <div class="col-sm-6 mx-auto">
        <div class=" h4 text-center alert alert-danger mb-4 mt-4 " role="alert">เเก้ไขข้อมูลสมาชิก</div>
        <form method="POST" action="update_cust.php">
        
        <label>รหัสลูกค้า:</label>
        <input type="number" name="cus_id"  class="form-control"  placeholder="...รหัสลูกค้า" readonly value=<?=$row['cus_id']?> > <br>
        
        <label>ชื่อ:</label>
        <input type="text" name="fname"  class="form-control"  placeholder="...ชื่อ" value=<?=$row['first_name']?> > <br>
        
        <label>นามสกุล:</label>
        <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" value=<?=$row['last_name']?> > <br>

        <label>อายุ:</label>
        <input type="text" name="age"  class="form-control"  placeholder="...อายุ" value=<?=$row['phone']?> > <br>
        
        <label>เบอร์โทรศัพท์:</label>
        <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์" value=<?=$row['age']?>> <br>

        <label>ส่วนสูง:</label>
        <input type="number" name="height"  class="form-control"  placeholder="...ส่วนสูง" value=<?=$row['height']?>> <br>
 
        
        
        <label>วันที่ซื้อ:</label>
        <input type="date" name="dates"  class="form-control"  placeholder="...วันที่ซื้อ" value=<?=$row['date_buy']?>> <br>
        
        <input class="btn btn-success" type="submit" value="submit"  >
       
        <a href="table_customer.php" class="btn btn-danger ">Cancel</a>
    </form>
    </div>
    </div>
</div>
 </body>
 </html>