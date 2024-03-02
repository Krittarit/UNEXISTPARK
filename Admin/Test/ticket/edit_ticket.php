<?php  
    include 'connect.php';
    $id = $_GET['ticket_id'];
    $sql=" SELECT * FROM ticket WHERE ticket_id = '$id' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <!--link bootstap & style-form.css-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/style-form1.css" rel="stylesheet" >
 </head>
 <body>
    <div class="container">
        <h1 class="title">เเก้ไขข้อมูลสมาชิก</h1>
        <form method="POST" action="update_ticket.php">
            <div class="main-info">
                <div class="inbox">
                    <label>รหัสตั๋ว:</label>
                    <input type="number" name="ticket_id"  class="form-control"  readonly value=<?=$row['ticket_id']?> > <br>
                </div>
                <div class="inbox">
                    <label>ประเภทตั๋ว:</label>
                    <input type="text" name="type_ticket"  class="form-control"  value=<?=$row['type_ticket']?> > <br>
                </div>
                <div class="inbox">
                    <label>ราคา:</label>
                    <input type="number" name="price"  class="form-control" value=<?=$row['price']?>  > <br>
                </div>
                <div class="inbox">
                    <label>อายุที่จำกัด:</label>
                    <input type="number" name="age_limit"  class="form-control"  value=<?=$row['age_limit']?> ><br>
                </div>
                <div class="inbox">
                    <label>ความสูงที่จำกัด:</label>
                    <input type="number" name="height_limit"  class="form-control"  value=<?=$row['height_limit']?> ><br>
                </div>
                
                    <div class="button">
                        <input  type="submit" value="Update" class="btn btn-success" >
                    </div>
                    <div class="cancel">
                        <a href="table_ticket.php" class="btn btn-danger ">Cancel</a>
                    </div>
                       
            </div>
        </form>
    </div>
 </body>
 </html>