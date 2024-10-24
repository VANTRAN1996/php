<?php
     include "DATABASE.php";
    if(isset($_POST['btn'])){

        $name = $_POST['NAME'];
        $image = $_FILES['IMAGE']['name'];//chi lay ten hinh anh de gui len database
        //lay duong dan cua anh
        $image_tmp_name = $_FILES['IMAGE']['tmp_name'];
        $about = $_POST['ABOUT'];
        $price = $_POST['PRICE'];
        $warranty = $_POST['WARRANTY'];

        $sql = "INSERT INTO sanpham(name, image, about, price, warranty) 
        VALUES ('$name' ,'$image' ,'$about','$price', '$warranty')
        ";
        mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp_name , 'image/'.$image);

    }

?>

<form action="themsp.php"method="POST" enctype="multipart/form-data">
    <h3>Addproducts</h3>
  <p> Name :</p>
  <input type="text" name="NAME">
  <p> Image :</p>
  <input type="file" name="IMAGE">
  <p>ABout</p>
  <input type="tex"name="ABOUT">
  <p>Price :</p>
  <input type="text" name="PRICE">
  <p> Warranty :</p>
  <input type="text"name="WARRANTY"><br>
  <button id="submit" name="btn" value="send"> SEND</button>


</form>