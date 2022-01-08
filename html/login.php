<?php 
	include "connection.php";
	include "header.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/login.php">
  </head>
  <body>
<div class="login-box">
  <form action="" method="POST">
  <h1>CUSTOMER LOGIN</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="user">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
    
  </div>

  <input type="submit" class="btn" value="Sign in" name="btn-save">
  </form>
</div>
<?php
if(isset($_POST['btn-save']))
{
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[user]' && password='$_POST[password]';");
  
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);

  if($count==0)
  {
    ?>
          
          <script type="text/javascript">
            alert("The username and password doesn't match.");
          </script> 
            
    <?php
  }
else
//giving a session variable for every page
  {
    $_SESSION['login_user'] = $_POST['user'];

    ?>
      <script type="text/javascript">
        window.location="home.php";
      </script>
    <?php
  }
}


?>
<?php
		include "footer.php";
	?>
  </body>
</html>
