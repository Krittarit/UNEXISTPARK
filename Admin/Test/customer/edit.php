<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <div class="title">Editor</div>
        <div class="content">
          <form method="POST" action="update_cust.php">
                
                <div class="user-details">
                    
                    <div class="input-box">
                        <span name="fname" class="details">First Name</span>
                        <input type="text" >
                    </div>
                    <div class="input-box">
                        <span name="lname" class="details">Last Name</span>
                        <input type="text" >
                    </div>
                    <div class="input-box">
                        <span name="telephone" class="details">Phone</span>
                        <input type="text" >
                    </div>
                    <div class="input-box">
                        <span name="age" class="details">age</span>
                        <input type="number" >
                    </div>
                    <div class="input-box">
                        <span name="height" class="details">height</span>
                        <input type="number" >
                    </div>
                    <div class="input-box">
                        <span name="dates" class="details">BuyDate</span>
                        <input type="date" >
                    </div>
                    
                    <div class="button">
                        <input type="submit" value="Edit">
                    </div>
                    
            </form>
        </div>
    </div>
</body>
</html>