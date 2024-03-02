<?php  
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
</head>
<body>

   <div class="container">
 
   <h3 class="mt-4">ตารางข้อมูลพนักงานในสวนสนุก</h3>
   <a href="fr_ticket.php" class="btn btn-success mb-2 float-end">Add</a>
<table id="example" class="table table-dark table-striped mt-4" >
    <thead>
        <tr>
            <th>ticketID</th>
            <th>type</th>
            <th>price</th>
            <th>minage</th>
            <th>minheight</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM sellticket";

        $result = mysqli_query($conn,$sql); //เชื่อมต่อฐานข้อมูลจากหน้า condb

        while($row = mysqli_fetch_array($result)) //เอาตัวเเปรด้านบนมาใส่เป็นข้อมูล
        
            { //เริ่มการทำงานเเสดงผลคอลัมน์
        ?>

          <tr>
            <td><?=$row["Sell_id"]?></td>     
            <td><?=$row["type_ticket"]?></td>
            <td><?=$row["price"]?></td>
            <td><?=$row["min_age"]?></td>
            <td><?=$row["min_height"]?></td>
           
            <td><a href="edit_ticket.php?Sell_id=<?=$row["Sell_id"]?>" class="btn btn-warning mb-4">Edit</a></td>  
            <td><a href="delete_ticket.php?Sell_id=<?=$row["Sell_id"]?>" class="btn btn-danger" mb-4 onclick="Del(this.href);return false;">Delete</a></td>  
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