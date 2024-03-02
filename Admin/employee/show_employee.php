<?php  
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="../../image/logo.png" type="image/x-icon" >

    <title>Employee</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
    <script>
       $(document).ready(function () {
    $('#example').DataTable({
        dom: '<"top"i>rt<"bottom"flp><"clear">',
    });
});
</script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   

<link rel="stylesheet" href="theme/css/all.css">
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
</head>
<body>


   <div class="container">
   <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    
 
   <h3 class="mt-4">ตารางข้อมูลพนักงานในสวนสนุก</h3>
   <a href="fr_cust.php" class="btn btn-success mb-2 float-end">Add</a>
<table id="example" class="table table-dark table-striped mt-4" >
    <thead>
        <tr>
            <th>employeeID</th>
            <th>name</th>
            <th>surname</th>
            <th>age</th>
            <th>phone</th>
            <th>address</th>
            <th>salary</th>
            <th>managerID</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM employee";

        $result = mysqli_query($conn,$sql); //เชื่อมต่อฐานข้อมูลจากหน้า condb

        while($row = mysqli_fetch_array($result)) //เอาตัวเเปรด้านบนมาใส่เป็นข้อมูล
        
            { //เริ่มการทำงานเเสดงผลคอลัมน์
        ?>

          <tr>
            <td><?=$row["id"]?></td>     
            <td><?=$row["name"]?></td>
            <td><?=$row["surname"]?></td>
            <td><?=$row["age"]?></td>
            <td><?=$row["phone"]?></td>
            <td><?=$row["address"]?></td>
            <td><?=$row["salary"]?></td>
            <td><?=$row["managerID"]?></td>
            <td><a href="edit_employee.php?id=<?=$row["id"]?>" class="btn btn-warning mb-4">Edit</a></td>  
            <td><a href="delete_employee.php?id=<?=$row["id"]?>" class="btn btn-danger" mb-4 onclick="Del(this.href);return false;">Delete</a></td>  
        </tr>
        <?php
            } //จบการทำงานเเสดงผลคอลัมน์
        mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
        ?>
   </tbody>
</table>

        </div > 
</body>
</html>

<script language="JavaScript">
   function Del(mypage){
     var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
     if(agree){
        window.location=mypage;
     }
   }
    </script>