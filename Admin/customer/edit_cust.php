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
    <link rel="icon"  href="../../image/logo.png" type="image/x-icon" >

    <title>UNEXIST-ADMIN-customer table EDIT</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
    <link href="css/style-form2.css" rel="stylesheet">

 </head>
 <body>
    <div class="container">
        <h1 class="title">เเก้ไขข้อมูลสมาชิก</h1>
        <form method="POST" action="update_cust.php">
            <div class="main-info">
                    <div class="inbox">
                        <label>รหัสลูกค้า:</label>
                        <input type="number" name="cus_id"  class="form-control"  placeholder="...รหัสลูกค้า" readonly value=<?=$row['cus_id']?> > <br>
                    </div>

                    <div class="inbox">
                        <label>ชื่อ:</label>
                        <input type="text" name="fname"  class="form-control"  placeholder="...ชื่อ" value=<?=$row['first_name']?> > <br>
                    </div>

                    <div class="inbox">
                        <label>นามสกุล:</label>
                        <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" value=<?=$row['last_name']?> > <br>
                    </div>

                    <div class="inbox">
                        <label>อายุ:</label>
                        <input type="text" name="age"  class="form-control"  placeholder="...อายุ" value=<?=$row['phone']?> > <br>
                    </div>

                    <div class="inbox">
                        <label>เบอร์โทรศัพท์:</label>
                        <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์" value=<?=$row['age']?>> <br>
                    </div>

                    <div class="inbox">
                        <label>ส่วนสูง:</label>
                        <input type="number" name="height"  class="form-control"  placeholder="...ส่วนสูง" value=<?=$row['height']?>> <br>
                    </div>

                    <div class="inbox">
                        <label>วันที่ซื้อ:</label>
                        <input type="date" name="dates"  class="form-control"  placeholder="...วันที่ซื้อ" value=<?=$row['date_buy']?>> <br>
                    </div>

                    <div class="button">
                        <input class="btn btn-success" type="submit" value="submit"  >
                    </div>

                    <div class="cancel">
                        <a href="table_customer.php" class="btn btn-danger ">Cancel</a>
                    </div>
                </div>
            </form>
    </div>
 </body>
 </html>