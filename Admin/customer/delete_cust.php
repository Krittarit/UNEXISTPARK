<?php
   include 'connect.php';
   $id=$_GET['cus_id'];
   $sql="DELETE FROM customer WHERE cus_id='$id' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='table_customer.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>