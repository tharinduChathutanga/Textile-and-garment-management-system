<?php
header('Content-type: text/css;')
?>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

/*home page css*/
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html{
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
}
#home{
    background-color: black;
}
a{
    text-decoration: none;
}
.container{
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
/*Header section*/


.page-name h1 {
    font-family: 'Kaushan Script';
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
	transform: translateX(-100rem);
	animation: slideIn .5s forwards;
}
.page-name h1 span {
	color: crimson;
}
#header {
	position: fixed;
	z-index: 1000;
	left: 0;
	top: 0;
	width: 100vw;
	height: auto;
}
#header .header {
	min-height: 8vh;
	background-color: rgba(31, 30, 30, 0.24);
	transition: .3s ease background-color;
}
#header .nav-bar {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
	max-width: 1300px;
	padding: 0 10px;
}
#header .nav-list ul {
	list-style: none;
	position: absolute;
    background-color: rgb(31, 30, 30);
    opacity: .8;
	width: 100vw;
	height: 100vh;
	left: 100%;
	top: 0;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	z-index: 1;
	overflow-x: hidden;
	transition: .5s ease left;
}
#header .nav-list ul li{
	transform: translateX(100rem);
	animation: slideIn .5s forwards;
}
#header .nav-list ul li:nth-child(1){
	animation-delay: 0s;
}

#header .nav-list ul li:nth-child(2){
	animation-delay: .2s;
}

#header .nav-list ul li:nth-child(3){
	animation-delay: .4s;
}

#header .nav-list ul li:nth-child(4){
	animation-delay: .6s;
}
#header .nav-list ul li:nth-child(5){
	animation-delay: .8s;
}
#header .nav-list ul li:nth-child(6){
	animation-delay: 1.0s;
}
#header .nav-list ul li:nth-child(7){
	animation-delay: 1.2s;
}
#header .nav-list ul li:nth-child(8){
	animation-delay: 1.4s;
}

#header .nav-list ul.active {
    
    left: 20%;
}
#header .nav-list ul li a {
	font-size: 1.5rem;
	font-weight: 500;
	letter-spacing: .2rem;
	text-decoration: none;
	color: white;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}
#header .nav-list ul a::after {
	content: attr(data-after);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) scale(0);
	color: rgba(240, 248, 255, 0.021);
	font-size: 13rem;
	letter-spacing: 50px;
	z-index: -1;
	transition: .3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after {
	transform: translate(-50%, -50%) scale(1);
	letter-spacing: initial;
}
#header .nav-list ul li:hover a {
	color: crimson;
}
#header .hamburger {
	height: 60px;
	width: 60px;
	display: inline-block;
	border: 3px solid white;
	border-radius: 50%;
	position: relative;
	display: flex;
    align-items: center;
	justify-content: center;
	z-index: 100;
	cursor: pointer;
	transform: scale(.8);
	margin-right: 20px;
}
#header .hamburger:after {
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	border-radius: 50%;
	border: 3px solid white;
	animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar {
	height: 2px;
	width: 30px;
	position: relative;
	background-color: white;
	z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before {
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	background-color: white;
	transition: .3s ease;
	transition-property: top, bottom;
}
#header .hamburger .bar::after {
	top: 8px;
}
#header .hamburger .bar::before {
	bottom: 8px;
}
#header .hamburger.active .bar::before {
	bottom: 0;
}
#header .hamburger.active .bar::after {
	top: 0;
}


@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}
/*End Header section*/
/* main section */
#main {
    background-image: url(../images/main.jpg);
    background-size: cover;
    background-position: top center;
    position: relative;
    z-index: 1;
}
#main::after{
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: .7;
    z-index: -1;
}
.welcome{
    text-align: center;
    position: absolute;
}
.welcome span{
    text-transform: uppercase;
    display: block;
}
.text1{
    font-family: 'Kaushan Script';
    color: white;
    font-size: 40px;
    font-weight: 700;
    letter-spacing: 4px;
    margin-bottom: 10px;
    background-color: transparent;
    position: relative;
    animation: text 3s 1;
}
.text2{
    font-family: 'Kaushan Script';
    font-size: 30px;
    color: white;
    letter-spacing: 2px;
    animation: text 3s 1;
}
.text3{
    font-family: 'Kaushan Script';
    font-size: 30px;
    color: wheat;
    letter-spacing: 2px;
    animation: text 3s 1;
}
#main .SI{
    display: inline-block;
    padding: 5px 15px;
    color: red;
    background-color: transparent;
    border: 2px solid red;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 1rem;
    margin-top: 36px;
    transition: .3s ease background-color;
    font-family: 'Lobster';
}
#main .main{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
    justify-content: flex-start;
}
#main .SI:hover{
    color: white;
    background-color: red;
} 

/* End main section */

/* Start product section */
.pro{
	text-align: center;
	color: white;
	font-size: 28px;
	text-transform: uppercase;
	margin-top: 10%;
}
.pro span{
	color: crimson;
}


/* Utility stylings */
img{
    width: 100%;
    display: block;
}
.iteam-container{
    width: 88vw;
    margin: 0 auto;
}

.sm-title{
    font-family: 'Roboto', sans-serif;
    padding: 0.6rem 0;
    text-transform: capitalize;
}

.sm-title{
    font-weight: 300;
    font-size: 1rem;
    text-transform: uppercase;
}
.text-light{
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    opacity: 0.5;
    margin: 0.4rem 0;
}

/* product section */
.products{
    background: black;
    padding: 3.2rem 0;
}
.products .text-light{
    text-align: center;
    width: 70%;
    margin: 0.9rem auto;
}
.product{
    margin: 2rem;
    position: relative;
}
.product-content{
    background:  rgba(31, 30, 30, 0.24);
    padding: 3rem 0.5rem 2rem 0.5rem;
    cursor: pointer;
}
.product-img{
    background: rgb(160, 160, 160);
    box-shadow: 0 0 20px 10px rgb(160, 160, 160);
    width: 200px;
    height: 200px;
    margin: 0 auto;
    border-radius: 50%;
    transition: background 0.5s ease;
}
.trouser{
	height:200px;	
}
.product-btns{
    display: flex;
    justify-content: center;
    margin-top: 1.4rem;
    opacity: 0;
    transition: opacity 0.6s ease;
}
.btn-cart, .btn-buy{
    background: transparent;
    border: 1px solid black;
    padding: 0.8rem 0;
    width: 125px;
    font-family: inherit;
    text-transform: uppercase;
    cursor: pointer;
    border: none;
    transition: all 0.6s ease;
}
.btn-cart{
    background: black;
    color: white;
}
.btn-cart:hover{
    background: crimson;
}
.btn-buy{
    background: white;
}
.btn-buy:hover{
    background: crimson;
    color: #fff;
}
.product-info{
    background: rgb(189, 30, 30);
    padding: 2rem;
}
.product-info-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.sm-title{
	font-size: 1.4rem;
}

.product-name{
    color: black;
    display: block;
    text-decoration: none;
    font-size: 1.5rem;
    text-transform: uppercase;
    font-weight: bold;
}
.product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
	display: inline-block;
	font-size: 1.3rem;
}

.product-img img{
    transition: transform 0.6s ease;
}
.product:hover .product-img img{
    transform: scale(1.1);
}
.product:hover .product-img{
    background: crimson;
}
.product:hover .product-btns{
    opacity: 1;
}









/* Media Queries */
@media screen and (min-width: 992px){
    .product-items{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-col-r-bottom{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}
@media screen and (min-width: 1200px){
    .product-items{
        grid-template-columns: repeat(3, 1fr);
    }
    .product{
        margin-right: 1rem;
        margin-left: 1rem;
    }
    .products .text-light{
        width: 50%;
    }
}

@media screen and (min-width: 1336px){
    .product-items{
        grid-template-columns: repeat(4, 1fr);
    }
    .product-collection-wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .flex{
        height: 60vh;
    }
    .product-col-left{
        height: 121.5vh;
    }
}
/*end product section*/
/* Footer */
#footer {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#footer .footer {
	min-height: 200px;
    flex-direction: column;
    align-items: center;
	padding-top: 50px;
	padding-bottom: 10px;
}
#footer h2 {
	color: white;
	font-weight: 500;
	font-size: 1.8rem;
	letter-spacing: .1rem;
	margin-top: 10px;
	margin-bottom: 10px;
}
#footer .terms{
    color: white;
}
#footer .terms:hover{
     color: crimson;
}
#footer .social-icon {
	display: flex;
	margin-bottom: 50px;
}
#footer .social-item {
	height: 50px;
	width: 50px;
	margin: 0 15px;
}
#footer .social-item img {
	filter: grayscale(1);
	transition: .3s ease filter;
}
#footer .social-item:hover img {
	filter: grayscale(0);
}

/* End Footer */


/*keyframes*/
@keyframes text {
    0%{
        color: transparent;
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
    }
    85%{
        letter-spacing: 4px;
        margin-bottom: -40px;
    }
}
/*End keyframes*/

@media only screen and (min-width: 600px) {
	
	/* products Section */
	#product .product-bottom .product-item {
		flex-basis: 25%;
		margin: 2.5%;
	}
	/* End products Section */
}

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {
	/* header */
	#header .hamburger {
		display: none;
	}
	#header .nav-list ul {
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li {
		display: inline-block;
	}
	#header .nav-list ul li a {
		font-size: 1.8rem;
	}
	#header .nav-list ul a:after {
		display: none;
	}
	/* End header */

	#product .product-bottom .product-item {
		flex-basis: 22%;
		margin: 1.5%;
	}
}
/* End  Media Query For Desktop */
/*end home page css*/


