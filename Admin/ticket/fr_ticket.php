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
    <!-- link bootstap & style-form.css-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
    <link href="css/style-form2.css" rel="stylesheet" >
 </head>
 <body>
    <div class="container">
        <h1 class="title">เพิ่มข้อมูลสมาชิก</h1>
        <form method="POST" action="insert_ticket.php">
            <div class="main-info">
                <div class="inbox">
                    <label>ประเภทตั๋ว:</label>
                    <input type="number" name="type_ticket"  class="form-control"  placeholder="...ประเภทตั๋ว" required > <br>
                </div>
                <div class="inbox">
                    <label>ราคาตั๋ว:</label>
                    <input type="text" name="price"  class="form-control"  placeholder="...ราคาตั๋ว" required> <br>   
                </div>
                <div class="inbox">
                    <label>อายุขั้นต่ำ:</label>
                    <input type="number" name="age_limit"  class="form-control"  placeholder="...อายุขั้นต่ำ"> <br>
                </div>
                <div class="inbox">
                    <label>ความสูงขั้นต่ำ:</label>
                    <input type="number" name="height_limit"  class="form-control"  placeholder="...ความสูงขั้นต่ำ"> <br>
                </div>
                <div class="button">
                    <input class="btn btn-success" type="submit" value="submit"  >
                </div>
                <div class="cancel">
                    <a href="table_ticket.php" class="btn btn-danger ">Cancel</a>   
                </div>
            </div>
        </form>
    </div>
 </body>
 </html>