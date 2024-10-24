<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
    body{
        background-image: url("image/Ky-uc.jpg");
        background-size:cover; 
    }
    li {
        display: inline;
      font-size:300%;padding-right: 40px;
      }
    li a{
        letter-spacing: 10px ; padding-right: 30px;
        color: black;
    }
    li a:hover{
        color: white;
    }
    section{
        padding-left: 130px ;letter-spacing: 5px ;font-size:150%;
        padding-top: 50px;text-shadow: 2px 0px 2px;
    }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <ul>            <li><b>GALLERY</b></li>
                <li><a href="index.php?page_layout=sigup">SIN_UP</a></li>
                <li><a href="index.php?page_layout=login">LOGIN</a></li>
                <li><a href="#"class="">HELP</a></li>
       </ul>
    </header>
    <section>
    <a><b>Artist name :<i>VANTRAN</i></b></a><br>
     <p><b>Painting since :<i>2019</i></b></p><br>
     <p>I apprecitate your interest in my work !!!</p>
     &copy; 2019/Vantran.art <br>
     <a href="#"> &copy; /Vantran020396@gmail.com</a>
    </section>
</div>
</body>
</html>
<?php 
    if(isset($_GET['page_layout'])){
    switch ($_GET['page_layout']){
      case 'login';
      include "login.php";
      break;
      case 'sigup';
     include "sigup.php";
      break;
    }
    }



?>