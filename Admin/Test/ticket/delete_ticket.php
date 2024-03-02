<?php
   include 'connect.php';
   $id=$_GET['ticket_id'];
   $sql="DELETE FROM ticket WHERE ticket_id='$id' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='table_ticket.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>