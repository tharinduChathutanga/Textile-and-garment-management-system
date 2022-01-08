<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.php">
</head>
<body id="home">
        <!--Starting header-->
        <?php
            include 'header.php';
        ?>
        <!--End heder-->
    <!--Starting main section-->
    <section id="main">
        <div class="main container">
            <div class="">
                <span class="text1">Welcome to</span><br>
                <span class="text2">Dress Shopping</span><br>
                <span class="text3">World</span><br>
                <a href="registration.php" type="button" class="SI">Sign In</a>
            </div>
        </div>

    </section>
    <!--end main section-->
    
    <div class = "products">
      <div class = "item-container">
         
          <div class = "product-items">
              <!-- single product -->
              <div class = "product">
                  <div class = "product-content">
                      <div class = "product-img"><a href="t-shirt.php">
                          <img src = "../images/t-shirt.png" alt = "product image"></a>
                      </div>
                      <div class = "product-btns">
                          <button type = "button" class = "btn-cart"> add to cart
                             
                          </button>
                          <a href="t-shirt.php">
                          <button type = "button" class = "btn-buy"> shop now   
                          </button></a>
                      </div>
                  </div>

                  <div class = "product-info">
                      <div class = "product-info-top">
                          <h2 class = "sm-title">t-shirt</h2>
                          
                      </div>
                      <a href = "t-shirt.php" class = "product-name">mens t-shirt, new product</a>
                      
                      <p class = "product-price">RS 850.00</p>
                  </div>
              </div>
              <!-- end of single product -->
              <!-- single product -->
              <div class = "product">
                  <div class = "product-content">
                      <div class = "product-img"><a href="shirt.php">
                          <img src = "../images/shirt.png" alt = "product image"></a>
                      </div>
                      <div class = "product-btns">
                          <button type = "button" class = "btn-cart"> add to cart</button>
                          <a href="shirt.php"><button type = "button" class = "btn-buy"> buy now
                          </button></a>
                      </div>
                  </div>

                  <div class = "product-info">
                      <div class = "product-info-top">
                          <h2 class = "sm-title">shirt</h2>
                      </div>
                      <a href = "shirt.php" class = "product-name">mens shirt, new product</a>
                      
                      <p class = "product-price">RS 1035.00</p>
                  </div>
              </div>
              <!-- end of single product -->
              <!-- single product -->
              <div class = "product">
                  <div class = "product-content">
                      <div class = "product-img"><a href="short.php">
                          <img src = "../images/short.png" alt = "product image"></a>
                      </div>
                      <div class = "product-btns">
                          <button type = "button" class = "btn-cart"> add to cart</button>
                          <a href="short.php"><button type = "button" class = "btn-buy"> buy now </button></a>
                      </div>
                  </div>

                  <div class = "product-info">
                      <div class = "product-info-top">
                          <h2 class = "sm-title">shorts</h2>
                         
                      </div>
                      <a href = "short.php" class = "product-name">mens shorts, new product</a>
                      
                      <p class = "product-price">RS 925.00</p>
                  </div>
              </div>
              <!-- end of single product -->
              <!-- single product -->
              <div class = "product">
                  <div class = "product-content">
                      <div class = "product-img"><a href="trouser.php">
                          <img src = "../images/trouser.png" alt = "product image" class="trouser"></a>
                      </div>
                      <div class = "product-btns">
                          <button type = "button" class = "btn-cart"> add to cart</button>
                          <a href="trouser.php"><button type = "button" class = "btn-buy"> buy now</button></a>
                      </div>
                  </div>

                  <div class = "product-info">
                      <div class = "product-info-top">
                          <h2 class = "sm-title">trouser</h2>
                      </div>
                      <a href = "trouser.php" class = "product-name">mens trouser, new product</a>
                      <p class = "product-price">RS 1535.00</p>
                  </div>
              </div>
              <!-- end of single product -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?> 
    <!-- End Footer -->
    
</body>
</html>