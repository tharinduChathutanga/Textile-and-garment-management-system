<?php
header('Content-type: text/css;')
?>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: #151516;
}

.wrapper{
  position: relative;
  margin-top:400px;
  
  left: 50%;
  transform: translate(-50%,-50%);
  width: 550px;
  height: 400px;
  display: flex;
  box-shadow: 2px 2px 10px rgb(243, 11, 11);
}

.slider_container{
  width: 45%;
  height: 100%;
  background: #ec1818;
  align-items: center;
  padding-top: 10%;
}
.checkout_container{
  width: 55%;
  height: 100%;
  background: rgb(231, 196, 196);
  padding: 30px;
}

.checkout_container h3{
  margin-bottom: 25px;
  text-transform: uppercase;
  text-align: center;
}



.checkout_container  label{
  display: block;
  margin-top:5px;
  margin-bottom: 5px;
}

.checkout_container .form-control{
  width: 100%;
  border: none;
  background: #f2f2f2;
  padding: 10px;
}




.checkout_container  button{
  font-family: sans-serif;
	text-transform: uppercase;
	font-size: 15px;
	border: 0;
	color: #fff;
	background: #8b1405;
	padding: 7px 15px;
	box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.2);
	cursor: pointer;
	margin-top: 15px;
}

/* bxslider */
.bx-wrapper{
  background: transparent !important;
  border: none !important;
  box-shadow: 0 0 !important;
  margin-top: 30px !Important;
}


.bx-wrapper .bx-pager.bx-default-pager a{
  border: 2px solid #fff !important;
  border-radius: 50% !important;
  background: transparent !Important;
}

.bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus, .bx-wrapper .bx-pager.bx-default-pager a:hover{
  background: #fff !important;
}