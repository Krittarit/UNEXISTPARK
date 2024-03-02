<?php 
   include 'connect.php' ;
   $f_name = $_POST['fname'];
   $l_name = $_POST['lname'];
   $position = $_POST['position'];
   $chiefID = $_POST['chiefID'];
   $zone = $_POST['zone'];
   $age = $_POST['age'];
   $emails = $_POST['GZ'];
   $telephone = $_POST['telephone'];
   $salary = $_POST['salary'];
   $address = $_POST['address'];
   $pass = $_POST['pass'];
   $username = $_POST['username'];
   

   $sql="INSERT INTO employee(first_name,last_name,position,chief,areazone,age,Email,phone,salary,address,Password,Username)
   VALUES('$f_name','$l_name','$position','$chiefID','$zone','$age','$emails','$telephone','$salary','$address','$pass','$username')";
   
   $result=mysqli_query($conn,$sql);
      if($result){
         echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
         echo "<script>window.location='table_employee.php';</script>";
      }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
      }
      mysqli_close($conn);
   ?>