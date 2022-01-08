<?php 
	include "connection.php";
	include "header.php";
 ?>
<!DOCTYPE html>

<html>
<head>
    <title>Customer Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/RegPage.php" />
    
</head>
    <body>
        
        <div class="reg-container">
            <form action="" method="POST" name="registration">
        <div id="cReg">
            <h1 id="mainH">Customer Registration</h1>
            <div id="cReg_data">
                <p4 class="head">First Name</p4>
                <input type="text" name="first" placeholder="Enter first name" class="data" /></br>
                <p4 class="head">Last Name</p4>
                <input type="text" name="last" placeholder="Enter last name" class="data" /></br>
                <p4 class="head">Username</p4>
                <input type="text" name="username" placeholder="Enter username" class="data" /></br>
                <p4 class="head">Birthday</p4>
                <input type="date" name="birthday" class="data" /></br>
                <p4 class="head">e-mail</p4>
                <input type="email" name="email" placeholder="Enter e-mail address" class="data" /></br>
                <p4 class="head">Password</p4>
                <input type="password" name="password" placeholder="Enter password" class="data" /></br>
                <p4 class="head">Re-Enter Password</p4>
                <input type="password" placeholder="Re-enter password" class="data" /></br>
                <p4 class="head">Mobile Number</p4>
                <input type="text" name="contact" placeholder="Enter mobile No" class="data" /></br>
                
                <input type="checkbox" id="agree" />
                <label for="agree" class="ag">Agree to the <a href="XXXXXXXXX">Terms & Conditions</a></label>
                <input class="submit" type="submit" name="submit" value="Sign Up" > 
                
            </div>
        </div>
        <div id="log">
            <h4 id="login">Already have an account?</h4>
            <button id="loginB">Sign in</button>
        </div>

        <div id="calender">
            <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23D81B60&amp;ctz=Asia%2FColombo&amp;src=YTRjaTZoNnYzMXFwaHFiYjZqYTB2Mzc5YjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23F4511E&amp;color=%230B8043" style="border:solid 1px #777" width="500" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
        </form>
        </div>
        <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from user";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `user` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[birthday]', '$_POST[password]', '$_POST[email]', '$_POST[contact]','$_POST[name]','$_POST[cardnumber]','$_POST[exdate]','$_POST[cvv]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          window.location="login.php";
          </script>
        <?php
        }
  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>
        <!-- Footer -->
        <?php
		    include "footer.php";
	    ?>
        <!-- End Footer -->

    </body>
</html>
