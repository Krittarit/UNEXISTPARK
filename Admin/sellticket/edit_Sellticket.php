<?php  
    include 'connect.php';
    $id = $_GET['Sell_id'];
    $sql=" SELECT * FROM sellticket WHERE Sell_id = '$id' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNEXIST-ADMIN-sellticket table Edit</title>

    <!--link bootstap & style-form.css-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/style-form1.css" rel="stylesheet" >
 </head>
 <body>
    <div class="container">
        <h1 class="title">เเก้ไขข้อมูลสมาชิก</h1>
        <form method="POST" action="update_Sellticket.php">
            <div class="main-info">
                <div class="inbox">
                    <label>รหัสตั๋ว:</label>
                    <input type="number" name="Sell_id"  class="form-control"  readonly value=<?=$row['Sell_id']?> > <br>
                </div>
                <div class="inbox">
                    <label>รหัสลูกค้า:</label>
                    <input type="number" name="cust_id"  class="form-control"  value=<?=$row['cust_id']?> > <br>
                </div>
                <div class="inbox">
                    <label>ประเภทตั๋ว:</label>
                    <input type="number" name="ticket_type"  class="form-control" value=<?=$row['ticket_type']?>  > <br>
                </div>
                <div class="inbox">
                    <label>วันที่ซื้อ:</label>
                    <input type="date" name="date_buy"  class="form-control"  value=<?=$row['date_buy']?> ><br>
                </div>
                <div class="inbox">
                    <label>ราคา:</label>
                    <input type="number" name="price"  class="form-control"  value=<?=$row['price']?> ><br>
                </div>
                
                    <div class="button">
                        <input  type="submit" value="Update" class="btn btn-success" >
                    </div>
                    <div class="cancel">
                        <a href="table_Sellticket.php" class="btn btn-danger ">Cancel</a>
                    </div>
                       
            </div>
        </form>
    </div>
 </body>
 </html>