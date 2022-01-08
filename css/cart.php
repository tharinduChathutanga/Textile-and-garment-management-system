<?php
header('Content-type: text/css;')
?>
.contain{
  margin-top:20%;
  margin-bottom:15%;
}
.logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
h1 {
    font-family: calibri;
    font-size: 4rem;

}

h2{
    font-family: calibri;
    font-size: 2rem;
    padding: 0 0 30px 0;
}

.img1 {
    padding: 40px 0 40px 0;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    
  }
  
  .col-25 {
    -ms-flex: 25%;
    flex: 25%;
  }
  
  .col-50 {
    -ms-flex: 50%;
    flex: 50%;
  }
  
  .col-75 {
    -ms-flex: 75%;
    flex: 75%;
  }
  
  .col-25,
  .col-50,
  .col-75 {
    padding: 20px 200px 0px;
  }
  
  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  .icon-con {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  
  .btn {
      text-align: center;
    background-color: #001aff;
    color: white;
    padding: 12px;
    margin: 12px auto;
    border: none;
    width: 15%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    
  }
  
  .btn:hover {
    background-color:#001aff;
  }
  
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }

