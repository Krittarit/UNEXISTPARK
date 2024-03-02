<?php 
   include 'connect.php' ;
   $f_name = $_POST['fname'];
   $l_name = $_POST['lname'];
   $age = $_POST['age'];
   $telephone = $_POST['telephone'];
   $height = $_POST['height'];

   $date = $_POST['dates'];
   

   $sql="INSERT INTO customer(first_name,last_name,age,phone,height,date_buy) 
   VALUES('$f_name','$l_name','$age','$telephone','$height','$date')";
   
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='fr_Sellticket.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>