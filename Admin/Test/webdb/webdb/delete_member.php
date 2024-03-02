<?php
   include 'condb.php';
   $ids=$_GET['id'];
   $sql="DELETE FROM ride WHERE id='$ids' ";

   if(mysqli_query($conn,$sql)){
      echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
      echo "<script>window.location='show_member.php';</script>";
   }else{
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
      echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
   }
    mysqli_close($conn);
?>