<?php
header('Content-type: text/css;')
?>
body{
	margin:0;
	font-family: sans-serif;
	overflow-x: hidden;
}

*{
	box-sizing: border-box;
}

.home{
	height: 100vh;
	overflow:hidden;
	position: relative;
	
}

.home .slide{
	position: absolute;
	
	width: 100%;
	height: 100%;
	z-index:1; 
	display:none;
	
	animation: slide 2s ease;
}
.home .slide.active{
	display: flex;
}
@keyframes slide{
	0%{
		transform:scale(1.1);
	}
	100%{
		transform: scale(1);
	}
}
.container{
	max-width: 1170px;
	margin:auto;
	
}

.home .container{
	 flex-grow: 1;
}
.home .caption{
	width:50%;
}
.home .caption h1{
	font-size:42px;
	color:#000000;
	margin:0;
	
}
.home .slide.active .caption h1{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1s;
}
.home .caption p{
	font-size: 18px;
	margin:15px 0 30px;
	color:#222222;
}
.home .slide.active .caption p{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.2s;
}
.mission{
	font-size: 20px;
}


@keyframes captionText{
	0%{
		opacity:0; transform: translateX(-100px);
	}
	100%{
	 opacity:1; transform: translateX(0px);	
	}
}

.home .controls .prev,
.home .controls .next{
 position: absolute;
 z-index:2;
 top:50%;
 height:40px;
 width: 40px;
 margin-top: -20px;
 color:#ffffff;
 background-color: crimson;
 text-align: center;
 line-height: 40px;
 font-size:20px;
 cursor:pointer;
 transition: all .5s ease;
}
.home .controls .prev:hover,
.home .controls .next:hover{
	background-color: #000000;
}
.home .controls .prev{
 left:0;
}
.home .controls .next{
 right:0;
}

.home .indicator{
	position: absolute;
	left:50%;
	bottom:30px;
	z-index: 2;
	transform: translateX(-50%);
}

.home .indicator div{
	display: inline-block;
	width:25px;
	height: 25px;
	color:#ffffff;
	background-color: crimson;
	border-radius:50%;
	text-align: center;
	line-height: 25px;
	margin:0 3px;
}

.home .indicator div.active{
 background-color: #000;
}

/*responsive*/
@media(max-width: 767px){
	.controls{
		display: none;
	}
}













