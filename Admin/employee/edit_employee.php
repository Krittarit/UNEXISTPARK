<?php  
    include 'connect.php';
    $id = $_GET['emp_id'];
    $sql=" SELECT * FROM employee WHERE emp_id = '$id' ";
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

    <title>UNEXIST-ADMIN-employee table EDIT</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-form2.css" rel="stylesheet">
 </head>
 <body>
    <div class="container ">
        <h1 class="title">เเก้ไขข้อมูลสมาชิก</h1>
            <form method="POST" action="update_employee.php">
                <div class="main-info">
                    <div class="inbox">
                        <label>รหัสสมาชิก:</label>
                        <input type="number" name="emp_id"  class="form-control"  readonly value=<?=$row['emp_id']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>ชื่อ:</label>
                        <input type="text" name="fname"  class="form-control"  value=<?=$row['first_name']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>นามสกุล:</label>
                        <input type="text" name="lname"  class="form-control"  placeholder="...นามสกุล" value=<?=$row['last_name']?>  > <br>
                    </div>
                    <div class="inbox">
                        <label>ตำเเหน่ง:</label>
                        <input type="text" name="position"  class="form-control"  placeholder="...ตำเเหน่ง" value=<?=$row['position']?>  > <br>
                    </div>
                    <div class="inbox">
                        <label>รหัสหัวหน้า:</label>
                        <input type="number" name="chiefID"  class="form-control"  placeholder="...รหัสหัวหน้า" value=<?=$row['chief']?>  > <br>
                    </div>
                    <div class="inbox">
                        <label>พื้นที่รับผิดชอบ:</label>
                        <input type="number" name="zone"  class="form-control"  placeholder="...พื้นที่รับผิดชอบ" value=<?=$row['areazone']?>  > <br>
                    </div>
                    <div class="inbox">
                        <label>อายุ:</label>
                        <input type="number" name="age"  class="form-control"  placeholder="...อายุ" value=<?=$row['age']?>  > <br>
                    </div>
                    <div class="inbox">
                        <label>อีเมล:</label>
                        <input type="email" name="GZ"  class="form-control"  placeholder="...อีเมล" value=<?=$row['Email']?>   > <br>
                    </div>
                    <div class="inbox">
                        <label>เบอร์โทรศัพท์:</label>
                        <input type="number" name="telephone"  class="form-control"  placeholder="...เบอร์โทรศัพท์" value=<?=$row['phone']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>เงินเดือน:</label>
                        <input type="number" name="salary"  class="form-control"  placeholder="...เงินเดือน" value=<?=$row['salary']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>ที่อยู่:</label>
                        <input type="text" name="address"  class="form-control"  placeholder="...ที่อยู่" value=<?=$row['address']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>รหัสผ่าน:</label>
                        <input type="number" name="pass"  class="form-control"  placeholder="...รหัสผ่าน" value=<?=$row['Password']?> > <br>
                    </div>
                    <div class="inbox">
                        <label>ชื่อผู้ใช้งาน:</label>
                        <input type="text" name="username"  class="form-control"  placeholder="...ชื่อผู้ใช้งาน" value=<?=$row['Username']?> > <br>
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