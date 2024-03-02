<?php
  include 'connect.php' ;
   $id = $_POST['cus_id'];
   $f_name = $_POST['fname'];
   $l_name = $_POST['lname'];
   $age = $_POST['age'];
   $telephone = $_POST['telephone'];
   $height = $_POST['height'];
  
   $date = $_POST['dates'];

  $sql = "UPDATE customer
  set first_name='$f_name'
  , last_name= '$l_name' 
  , age='$age' 
  , phone='$telephone'
  , height = '$height'
  , date_buy = '$date'
  WHERE cus_id='$id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='table_customer.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>



