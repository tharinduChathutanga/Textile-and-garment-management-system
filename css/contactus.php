<?php
header('Content-type: text/css;')
?>
 @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

html{
	font-size: 10px;
	font-family: "Roboto Cn", sans-serif;
}

a{
	text-decoration: none;
	color: #eee;
}



/* contact us */

body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:"quicksand", sans-serif;
    background: url(../images/tt.jpg) no-repeat;
    background-size: cover;

}

body{
    width: 100%;
    height: 80%;
    

}

.container{
    position: relative;
    display:flex;
    justify-content: center;
    align-items: center;
    width: 100k%;
    height: 100%;
    padding: 28px 100px;
}

.container: after{
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 50%;
    height: 100%;
    background: url("tt.jpg") no-repeat center;
    background-size:cover;
    z-index: -1;
    filter: blur(50px);
}
.content-box{
    max-width: 850px;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
    box-shadow: 0px 0px 19px 5px rgba(0,0,0,19);

}

.left{
    height: 100%;
    background: url("tt.jpg") no-repeat center;
    background-size:cover;

}
.right{
    padding: 25px 40px ;
}

h2{
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 10px;

}
h2:after{
    content: "";
    position:  absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 20px;
    width: 50px:
    border-radius: 2px;
    background-color:#2ecc71;

}
.field{
    width: 100%;
    padding: 0.5rem 1rem;
    outline: none;
    border: 2px solid rgba(0,0,0,0);
    background-color: darkgray;
    font-size: 1.1rem;
    margin-bottom: 22px;
    transition: 3s;

}
.field:hover{
    background-color:rgba(0,0,0,0.1);
}

.field:focus{
    background-color: #fff;
    border:2px solid rgba(30,85,250,0.47);
}

.area{
    min-height: 150px;

}

.btn{
    width: 15%;
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    background-color: #b91d1d ;
    cursor: pointer;
    outline: none;
    border:none;
    color:#fff
    transition: 0.3s;
}
.btn:hover{
    background-color: #b91d1d ;
    background-color: # ;
}
@media screen and (max-width:880px){
    .contact-box{
        grid-template-columns: 1fr;
    }

    .left{
        height: 200px;
    }
}