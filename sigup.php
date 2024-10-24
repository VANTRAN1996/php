<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
       form{
        padding-left: 130px ;letter-spacing: 10px ;font-size:250%;
        text-shadow: 2px 0px 2px;
    }
    form button {
        border-radius: 5px ;
    }
    </style>
</head>
<body>
    <div>
    <form action="sigup.php"method="POST">

         <lable>Username :</lable>
         <input type="text"name="username"><br>
         <label>Password :</label>
         <input type="text"name="password"><br>
         <button type="submit"name="btn">Sig_up</button>
         </form>
         
    </div>
</body>
</html>
<?php

include "DATABASE.php";
if(isset($_POST['btn'])){
    $id ="";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 2;
    $sql = " INSERT INTO thanhvien (id , username, password, level)values
    ('$id','$username', '$password', '$level' )";
    mysqli_query($conn , $sql);
    header ('location:index.php');
}



?>