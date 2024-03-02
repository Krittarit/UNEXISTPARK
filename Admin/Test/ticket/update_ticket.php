<?php
  include 'connect.php' ;
   $ticket_id = $_POST['ticket_id'];
   $type_ticket = $_POST['type_ticket'];
   $price = $_POST['price'];
   $age_limit = $_POST['age_limit'];
   $height_limit = $_POST['height_limit'];
   

  $sql = "UPDATE ticket
  set 
    type_ticket ='$type_ticket' 
  , price ='$price'
  , age_limit = '$age_limit'
  , height_limit = '$height_limit'
   WHERE ticket_id ='$ticket_id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='table_ticket.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>



