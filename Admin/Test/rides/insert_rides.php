<?php 
   include 'connect.php' ;
   $name = $_POST['fname'];
   $debut = $_POST['lname'];
   $maintenance = $_POST['age'];
   $level = $_POST['telephone'];
  
   

   $sql="INSERT INTO rides(ride_name,date_debut,date_maintenance,level) 
   VALUES('$name','$debut','$maintenance','$level')";
   
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='table_ride.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>