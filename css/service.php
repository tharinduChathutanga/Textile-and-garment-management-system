<?php
header('Content-type: text/css;')
?>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-image: url(../images/bckimg.jpg);
   

    height: 1100px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;

    background-color: none;
    font-family: calibri;
}

.container {
    padding: 0 60px;
}

.material {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.content h1 {
    margin-top: 200px;
    color: #434a54;
    font-size: 4.5rem;
}

.content p {
    color: #656d78;
    margin-top: 30px;
    margin-bottom: 80px;
    max-width: 500px;
    font-size: 1.5rem;
}

.lll  {
    background-color: #201e1e00;
    color: rgb(0, 0, 0);
    font-size: 1.6rem;
    padding: 10px 35px;
    text-decoration: none;
    position: absolute;
    border-radius: 20px;

    box-shadow: 0 5px 15px rgba(0,0,0,1);
    overflow: hidden;
    
}

.wrapper {
    overflow: hidden;
}

.features {
    margin-top: 50px;
    margin-left: 200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.features-group-2 {
    margin-left: 0px;
    margin-top: 0px;
    padding-bottom: 0px;
}

.feature-1,
.feature-2,
.feature-3 {
  
    position: relative;
    width: 350px;
    padding: 40px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,1);
    border-radius: 55px;
    margin: 20px;
    box-sizing: border-box;
    overflow: hidden;
    text-align: center;
}

.feature-3 {
    margin-top: 220px;
}

.feature-2 {
    margin-top: 20px;
    margin-bottom: 75px;
}

.features img {
    width: 180px;
    filter: drop-shadow(0 .1rem .2rem rgba(0,0,0,.35));
    position: relative;
    left: 33%;
    right: 67%;
    transform: translateX(-50%);
    border-radius: 20px;
}

.features h2 {
    text-align: center;
    font-size: 2.6rem;
    text-transform: uppercase;
    padding: 15px 0 15px 0; 
    color: #434a54;
}

.features p {
    font-size: 1.2rem;
    text-align: center;
    color: #434a54;
    line-height: 1.5;
}

.lrn {
    display: inline-block;
    padding: 10px 20px;
    background:black;
    border-radius: 4px;
    text-decoration: none;
    color: #000;
    font-weight: 500;
    margin-top: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,2);
}

.info {
    text-align: left;
    color: #434a54;
    font-size: 1.2rem;
    
}


