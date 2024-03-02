<?php 
   include 'connect.php' ;
   $type_ticket = $_POST['type_ticket'];
   $price = $_POST['price'];
   $age_limit = $_POST['age_limit'];
   $height_limit = $_POST['height_limit'];

   $sql="INSERT INTO ticket (type_ticket,price,age_limit,height_limit) 
   VALUES('$type_ticket','$price','$age_limit','$height_limit')";
   
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='table_ticket.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>
   