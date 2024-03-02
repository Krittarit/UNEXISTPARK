<?php
   include 'connect.php';
   $id=$_GET['ride_id'];
   $sql="DELETE FROM rides WHERE ride_id='$id' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='table_ride.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>