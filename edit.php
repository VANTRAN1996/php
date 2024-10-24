<?php
   include "DATABASE.php";
    $this_id =$_GET[' this_id '];
    echo $this_id ;
    $sql =" SELECT * FROM sanpham WHERE id=".$this_id ;
    $query = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($query);
    if(isset($_POST['btn'])){
      $name = $_POST['NAME'];
      $image = $_FILES['IMAGE']['name'];
      $image_tmp_name =  $_FILES['IMAGE']["tmp_name"];
      $about = $_POST['ABOUT'].
      $price = $_POST['PRICE'];
      $warranty = $_POST['WARRANTY'];
      $sql =" UPDATE sanpham SET name='$name', image='$image',
       about='about', price='$price' , warranty='$warranty' WHERE id=".$this_id ;
       mysqli_query($conn , $sql);
       move_uploaded_file($image_tmp_name , 'image/'.$image);
       header('location: trangchu.php');

    }
 
?>
<h1>San pham <?php echo $row['NAME']?></h1>
<br>
<form>
<p>NAME :</p>
<input type="text"name="name"value="<?php echo $row['NAME']?>">
<p>IMAGE :</p>
<span><img width="220px"height="220px"src="<?php echo $row['IMAGE']?>"alt=""></span>
<input type="file"name="image">
<p>ABOUT :</p>
<input type="text" name="about"value="<?php echo $row['ABOUT']?>">
<P>PRICE :</P>
<input type="text"name="price"value="<?php echo $row['PRICE']?>">
<p>WARRANTY :</p>
<input type="date"name="warranty"value="<?php echo $row['WARRANTY']?>">
<button id="submit"name="btn"value="edit">Edit</button>

</form>