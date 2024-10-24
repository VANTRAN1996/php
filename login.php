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
    <form  action="login.php" method="POST">
          <label > username :</label>
          <input type="text"name="username"><br>
          <label > password :</label>
          <input type="password"name="password"><br>
          <button type="submit"name="login"><a href="trangchu.php"></a>Login</button>
          <!-- <button type="submit"name="sigup"><a href="sigup.php">Sig_up</a></button>-->

    </form>
    </div>
</body>
</html>
<?php
include "DATABASE.php";
  session_start();
  if(isset($_SESSION['mySession'])){
    header('location:trangchu.php ');
  }

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM  thanhvien WHERE username='$username' and password='$password' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
   $_SESSION['mySession'] = $username ;
      header ("location:trangchu.php ");
    }else{
       echo "tai khoan hoac mat khau sai";
    }
}
?>
