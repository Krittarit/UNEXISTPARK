<?php
  include 'connect.php' ;
  $emp_id = $_POST['emp_id'];
  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
  $position = $_POST['position'];
  $chiefID = $_POST['chiefID'];
  $zone = $_POST['zone'];
  $age = $_POST['age'];
  $GZ = $_POST['GZ'];
  $telephone = $_POST['telephone'];
  $salary = $_POST['salary'];
  $address = $_POST['address'];
  $pass = $_POST['pass'];
  $username = $_POST['username'];

  $sql = "UPDATE employee 
  set  first_name ='$f_name'
  ,    last_name = '$l_name' 
  ,    position = '$position'
  ,    chief = '$chiefID'
  ,    areazone = '$zone'
  ,    age = '$age'
  ,    Email = '$GZ'
  ,    phone = '$telephone'
  ,    salary = '$salary'
  ,    address = '$address'
  ,    Password = '$pass'
  ,    Username = '$username' 
  WHERE emp_id='$emp_id' ";

  $result=mysqli_query($conn,$sql);
     if($result){
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='table_employee.php';</script>";
     }else{
       echo "<script>alert('ไม่สามารถเเก้ไขข้อมูลได้');</script>";
     }
     mysqli_close($conn);
  ?>
