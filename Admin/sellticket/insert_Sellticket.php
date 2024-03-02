<?php 
   include 'connect.php' ;
   $cust_id = $_POST['cust_id'];
   $ticket_type = $_POST['ticket_type'];
   $date_buy = $_POST['date_buy'];
   $price = $_POST['price'];
   

   $sql="INSERT INTO sellticket (cust_id,ticket_type,date_buy,price) 
   VALUES('$cust_id','$ticket_type','$date_buy','$price')";
   
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='table_Sellticket.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>
   