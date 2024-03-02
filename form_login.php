<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="icon"  href="image/logo.png" type="image/x-icon" >
<title> Unexsite park</title>
<link rel = "stylesheet" type="text/css" href="loginpage.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<script>
      function myFunction() {
      var x = document.getElementById("Password");
        if (x.type === "password") {
            x.type = "text";
        } else {
          x.type = "password";
        }
      }
</script>

<style>
  body{
    margin : 0;
    padding : 0;
    background: url(image/html_table.png) center / cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;

}
</style>

</head>
<body>
  <nav>
      <a href="index.html">  
        <img  src = "image/logo.png" class = "starwar">
      </a>
      <label class = "logo">
          <a href="index.html"> Unexist Park</a></label>
      <ul>
        <li>
            <a href="index.html">
              <img  src = "image/aboutUsicon.png" class = "iconAboutus">
              Home</a>
        </li>
      </ul>
    </nav>
      <div class ="loginbox">
                
                <img src = "image/user.png" class = "avatar">
                <h1>
                    LOGIN USER 
                </h1>
                <form name="formlogin"  method="post" action="login.php">
                    
                    <label>Username</label>
                    <input type="text"   id="Username" required name="Username" placeholder="Enter Username">
                    
                    <label>Password</label>
                    <input type="password"   id="Password" required name="Password" placeholder="Enter Password">

                    <div class="showpassword">
                        <input style="position: fixed;left: -38%;top: 76%" type="checkbox" onclick="myFunction()">
                        <p style="position: fixed;left: 50px;">Show Password</p>
                    </div>
                    <br><br>
                    <input type="submit"  value="Login">
                    
                </form>
             </div>
      <!-- <form name="frmlogin"  method="post" action="login.php">
        <p> </p>
        <p><b> Login Form </b></p>
        <p> ชื่อผู้ใช้ :
          <input type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน :
          <input type="password"   id="Password"required name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form> -->
</body>
</html>