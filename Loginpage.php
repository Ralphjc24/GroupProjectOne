<?php
    include("Database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <form action="booking.php" method="post">
      <h1 style="color:purple;">Gym Membership Registration</h1>

      <div class="container">
        <label style="color:purple;" for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label style="color:purple;" for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background: colorrgb(128, 6, 15);1">
        <button type="button" class="cancelbtn">Cancel</button>
        <b>
        <span class="psw">Forgot <a href="#">password?</a></span>
        <body style="background-color: lightblue;">
        
      </div>
    </form> 
</head>  
</html>
