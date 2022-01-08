<?php
header('Content-type: text/css;')
?>

/*profile page css*/
#profile{
	background-color: black;
}

.profile-container{
	background-image: linear-gradient(60deg, #7a8da3 0%, #595b5e 100%);
	width: 540px;
	height: 650px;
	margin: 0 auto;
	position: relative;
	margin-top: 150px;
	margin-bottom: 150px;
	box-shadow: 2px 5px 20px rgba(119, 119, 199, 0.5);
}
.leftbox{
	float: left;
	top: -5%;
	left: 5%;
	position: absolute;
	width: 15%;
	height: 110%;
	background: #d5412e;
	box-shadow: 3px 3px 10px rgba(119, 119, 199, 0.5);
	border: .1em solid #fff;
}
.tabs a{
	list-style: none;
	padding: 30px;
	color: #fff;
	font-size: 2.1em;
	display: block;
	transition: all .3s ease-in-out;
}
.tabs a:hover{
	color: #530f06;
	cursor: pointer;
	transform: scale(1.2);
}
.tabs a:first-child{
	margin-top: 7px;
}

.rightbox{
	width: 60%;
	margin-left: 27%;
	
}

.rightbox h1{
	font-family: sans-serif;
	color: #d5412e;
	font-size: 25px;
	padding-top: 5%;
	margin-bottom: 35px;
}
.rightbox h2{
	color: white;
	font-family: sans-serif;
	text-transform: uppercase;
	font-size: 11px;
	letter-spacing: 1px;
	margin-left: 2px;
	margin-top: 10px;
}
.rightbox input {
	border: 0;
	background-color: transparent;
	border-bottom: 1px solid #8b1405;
	width: 80%;
	font-size: 1.5em;
	margin-top: 5px;
	padding: 7px 0;
	color: #c5adad;
	outline: none;
}
.update-btn{
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




/*end profile page css*/

