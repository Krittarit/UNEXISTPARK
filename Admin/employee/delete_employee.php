<?php
   include 'connect.php';
   $id=$_GET['emp_id'];
   $sql="DELETE FROM employee WHERE emp_id='$id' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='table_employee.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>