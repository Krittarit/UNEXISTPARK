<?php
   include 'connect.php';
   $id=$_GET['Sell_id'];
   $sql="DELETE FROM sellticket WHERE Sell_id='$id' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='table_Sellticket.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>