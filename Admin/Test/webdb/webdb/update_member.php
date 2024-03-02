<?php
  include 'condb.php' ;
  $id = $_POST['id_ride'];
  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
  $tel = $_POST['telephone'];

  $sql = "UPDATE ride set name='$f_name', surname= '$l_name' , telephone='$tel' WHERE id='$id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='show_member.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>



