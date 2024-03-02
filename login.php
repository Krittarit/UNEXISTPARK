<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = ($_POST['Password']);
				//query 
                  $sql="SELECT * FROM employee WHERE Username='".$Username."' AND Password='".$Password."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["UserID"] = $row["emp_id"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["position"] = $row["position"];
 
                      if($_SESSION["position"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: Admin/index.php");
 
                      }else if ($_SESSION["position"]=="employee"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: FORSELL/fr_Sellticket.php");
 
                      }elseif ($_SESSION["position"]=="CEO"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: CEO/index.php");
 
                      }else{
                        echo "<script>";
                            echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");"; 
                            echo "window.history.back()";
                        echo "</script>";
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
             Header("Location: form_login.php"); //user & password incorrect back to login again
        }
?>