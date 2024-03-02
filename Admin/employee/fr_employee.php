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

    <title>UNEXIST-ADMIN-rides table</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
    <link href="css/style-form1.css" rel="stylesheet">
 </head>
 <body>
    <div class="container mx-6 ">
           <h1 class=" h4 text-center alert alert-success mb-4 mt-4 " role="alert">เพิ่มข้อมูลสมาชิก</h1>
            <form method="POST" action="insert_employee.php">
                <div class="main-info">
                    <div class="inbox">
                        <label>ชื่อ:</label>
                        <input type="text" name="fname"  class="form-control"  placeholder="...ชื่อ" > <br>
                    </div>
                    <div class="inbox">
                        <label>นามสกุล:</label>
                        <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" > <br>
                    </div>
                    <div class="inbox">
                        <label>ตำเเหน่ง:</label>
                        <input type="text" name="position"  class="form-control"  placeholder="...ตำเเหน่ง" > <br>
                    </div>
                    <div class="inbox">
                        <label>รหัสหัวหน้า:</label>
                        <input type="number" name="chiefID"  class="form-control"  placeholder="...รหัสหัวหน้า" > <br>
                    </div>
                    <div class="inbox">
                        <label>พื้นที่รับผิดชอบ:</label>
                        <input type="number" name="zone"  class="form-control"  placeholder="...พื้นที่รับผิดชอบ" > <br>
                    </div>
                    <div class="inbox">
                        <label>อายุ:</label>
                        <input type="number" name="age"  class="form-control"  placeholder="...อายุ" > <br>
                    </div>
                    <div class="inbox">
                        <label>อีเมล:</label>
                        <input type="email" name="age"  class="form-control"  placeholder="...อีเมล" > <br>
                    </div>
                    <div class="inbox">
                        <label>เบอร์โทรศัพท์:</label>
                        <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์"> <br>
                    </div>
                    <div class="inbox">
                        <label>เงินเดือน:</label>
                        <input type="number" name="salary"  class="form-control"  placeholder="...เงินเดือน"> <br>
                    </div>
                    <div class="inbox">
                        <label>ที่อยู่:</label>
                        <input type="text" name="address"  class="form-control"  placeholder="...ที่อยู่"> <br>
                    </div>
                    <div class="inbox">
                        <label>รหัสผ่าน:</label>
                        <input type="number" name="pass"  class="form-control"  placeholder="...รหัสผ่าน"> <br>
                    </div>
                    <div class="inbox">
                        <label>ชื่อผู้ใช้งาน:</label>
                        <input type="text" name="username"  class="form-control"  placeholder="...ชื่อผู้ใช้งาน"> <br>
                    </div>
                    <div class="button">
                        <input class="btn btn-success" type="submit" value="submit"  >
                    </div>
                    <div class="cancel">
                        <a href="table_employee.php" class="btn btn-danger ">Cancel</a>
                    </div>
                </div>
          </form>
        </div>
 </body>
 </html>