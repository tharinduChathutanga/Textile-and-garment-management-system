<?php
  session_start();
?>

<link rel="stylesheet" href="../css/style.php">

<!--Starting header-->
    <section id="header">
        <div class="header container">
          <div class="nav-bar">
            <div class="page-name">
              <a href="#main"><h1><span>T</span>itan <span>g</span>arment</h1></a>
            </div>
            <div class="nav-list">
              <div class="hamburger"><div class="bar"></div></div>
              <ul>
                <li><a href="home.php" >Home</a></li>
                <li><a href="service.php" >services</a></li>
                <li><a href="aboutus.php" >About</a></li>
                <li><a href="contactus.php" >Contact</a></li>
              
              <?php
            if(isset($_SESSION['login_user']))
            {

          ?>
                  <li><a href="cart.php" >cart</a></li>
                  <li><a href="profile.php">PROFILE</a></li>  
                  <li><a href="logout.php"> LOGOUT</a></li>
                
              <?php
            }
            else
            {   ?>
              

                <li><a href="login.php"> LOGIN</a></li>
                
                <li><a href="registration.php"> SIGN UP</a></li>
              </ul>
                <?php
            }
          ?>

            </div>
          </div>
        </div>
      </section>  
    <!--End heder-->
    <script src="../js/index.js"></script>
