<?php
  include 'connect.php' ;
   $ride_id = $_POST['ride_id'];
   $ride_name = $_POST['ride_name'];
   $date_debut = $_POST['date_debut'];
   $date_maintenance = $_POST['date_maintenance'];
   $level = $_POST['level'];
   

  $sql = "UPDATE rides 
  set ride_name='$ride_name'
  , date_debut='$date_debut' 
  , date_maintenance='$date_maintenance'
  , level = '$level'
   WHERE ride_id ='$ride_id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='table_ride.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>



