<?php
header('Content-type: text/css;')
?>
/*product page css*/
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.buy-product {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: black;
  font-family: "Poppins" , sans-serif;
}

.background {
  height: 100vh;
  width: 150%;
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: -11;
  background: linear-gradient(to bottom , rgb(54, 54, 54),#868286);
  clip-path: circle(60% at 90%);
}
.product-card {
  width: 800px;
  display: flex;
  background: rgb(112, 112, 112);
  box-shadow: 0 0 8px #000;
  border-radius: 20px;
}

.product-card .left-column {
  width: 50%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.product-card .left-column .share ,
.product-card .left-column .heart {
  position: absolute;
  top: 8px;
  font-size: 1.5rem;
  cursor: pointer;
  color: #FFF;
  text-shadow: 0 0 2px #000;
  transition: 0.3s ease;
}
.product-card .left-column .share {
  left: 10px;
}
.product-card .left-column .heart {
  right: 10px;
}
.product-card .left-column .share:hover {
  color: rgb(145,145,145);
}
.product-card .left-column .heart:hover {
  color: #C50000;
}
.product-card .left-column img {
  width: 100%;
  transition: 0.3s ease;
}
.product-card .right-column {
  width: 50%;
  position: relative;
  overflow: hidden;
  padding: 2rem 1rem ;
  display: flex;
  flex-direction: column;
}
.product-card .right-column .logo {
  width: 50px;
  position: absolute;
  top: 10px;
  right: 10px;
}
.product-card .right-column .product-name {
  text-transform: uppercase;
  font-weight: bold;
}
.product-card .right-column .product-name h1 {
  font-size: 2rem;
}
.product-card .right-column .product-name h1 span{
    color: crimson;
}

.product-card .right-column .price1 {
  font-size: 1.3rem;
  font-weight: bold;
  margin-top: 5%;
  margin-bottom: 5%;
}
.product-card .right-column .colors-trouser {
  display: flex;
}
.product-card .right-column .colors-trouser span:not(:last-child) {
  width: 20px;
  height: 20px;
  display: inline-block;
  border-radius: 50%;
  cursor: pointer;
  border: solid 2px #cacaca;
  transition: 0.3s ease;
  margin: 10px 5px;
}
.description p{
  font-size: 12px;
}

.product-card .right-column .colors-trouser .white {
  background: white;
}
.product-card .right-column .colors-trouser .white:hover {
  border: solid 2px white;
}
.product-card .right-column .colors-trouser .quantity {
  font-size: 1.2rem;
  font-weight: bold;
  align-self: center;
  margin-left: 100px;
}
.product-card .right-column .colors-trouser .quantity input {
  border: none;
  background-color: transparent;
  outline: none;
  font-size: 0.8rem;
  font-weight: bold;
}
.product-card .right-column .buy-it-btn {
  font-size: 1rem;
  cursor: pointer;
  text-transform: uppercase;
  background: linear-gradient(to right , rgb(54, 54, 54),#868286);
  color: #fff;
  border: none;
  outline: none;
  padding: 1vw;
  border-radius: 30px;
  margin-top: 5%;
}
.product-card .right-column .buy-it-btn:hover {
  box-shadow: 0 0 6px #000;
}

@media screen and (max-width:830px) {
  .product-card {
    width: 400px;
    height: 700px;
    flex-direction: column;
  }
  .product-card .left-column {
    width: 100%;
  }
  .product-card .left-column img {
    width: 60%;
  }
  .product-card .right-column {
    width: 100%;
  }
  
  .product-card .right-column .buy-it-btn {
    font-size: 1.2rem;
  }
  .product-card .right-column .colors-trouser .quantity {
    margin-left: 50px;
  }
}
@media screen and (max-width:400px) {
  .product-card {
    width: 300px;
    height: 520px;
  }
  .product-card .right-column .colors-trouser .quantity {
    margin-left: 20px;
  }
}

@media screen and (max-width:320px) {
  .product-card {
    width: 280px;
    height: 530px;
  }
}



/*product page css*/
