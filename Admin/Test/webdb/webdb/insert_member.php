<?php 
   include 'condb.php' ;
   $f_name = $_POST['fname'];
   $l_name = $_POST['lname'];
   $tel = $_POST['telephone'];

   $sql="INSERT INTO ride(name,surname,telephone) VALUES('$f_name','$l_name','$tel')";
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='show_member.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>