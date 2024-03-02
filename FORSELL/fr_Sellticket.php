<?php
include 'connect.php';
            $sql = " SELECT MAX(cus_id) as CUST FROM customer ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNEXIST-Sellticket</title>
    <!-- link bootstap & style-form.css-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-form2.css" rel="stylesheet">
    

<body>
    <div class="Box">
        <h1 class="title">เพิ่มข้อมูลลูกค้า</h1>
        <form method="POST" action="insert_Sellticket.php">
            <div class="main-info">
                <div class="inbox">
                   
                    <label>รหัสลูกค้า:</label>
                    <input type="number" name="cust_id" class="form-control" placeholder="...รหัสลูกค้า" 
                        value=<?= $row['CUST'] ?>> <br>
                        </div>

                    <div class="inbox">
                        <label>ประเภทตั๋ว:</label>
                        <input type="number" name="ticket_type" class="form-control" placeholder="...ประเภทตั๋ว"> <br>
                    </div>
                    <div class="inbox">
                        <label>วันที่ซื้อ:</label>
                        <input type="date" name="date_buy" class="form-control" placeholder="...วันที่ซื้อ"><br>
                    </div>
                    <div class="inbox">
                        <label>ราคา:</label>
                        <input type="number" name="price" class="form-control" placeholder="...ราคา"><br>
                    </div>
                    <div class="button">
                        <input class="btn btn-success" type="submit" value="submit">
                    </div>
                    <div class="cancel">
                        <a href="../form_login.php" class="btn btn-danger ">Logout</a>
                    </div>
                    <div class="Home">
                        <a href="../index_back.html" class="btn btn-primary ">Home</a>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>