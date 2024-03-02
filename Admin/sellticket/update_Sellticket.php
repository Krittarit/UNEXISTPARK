<?php
  include 'connect.php' ;
  $Sell_id = $_POST['Sell_id'];
   $cust_id = $_POST['cust_id'];
   $ticket_type = $_POST['ticket_type'];
   $date_buy = $_POST['date_buy'];
   $price = $_POST['price'];
   

  $sql = "UPDATE sellticket
  set 
  cust_id ='$cust_id' 
  , ticket_type ='$ticket_type'
  , date_buy = '$date_buy'
  , price = '$price'
   WHERE Sell_id ='$Sell_id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='table_Sellticket.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>



