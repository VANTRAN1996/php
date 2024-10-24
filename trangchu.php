<!DOCTYPE html>
<html lang="en">
<head>
    <title>BAI ART</title>
    <style type="text/css">
    body, section,footer , aside , tr , article, figure , figcaption{
        display:block;
    }
    body{
        color:black; background-color: #cccccc;
        background-position: center;
        font-family :'Times New Roman', Times, serif;
        line-height: 1.4em;

    }
    .wrapper{
      margin: 40px auto 20px auto;width: 960px;
    }
    header {
        height: 160px; color: green;
        width: 130px; height: 130px;margin: 0;
    }
    tr, footer{
        clear: both; color:green; background-color: #aeaca8;
    }
   tr, td{
        margin-right:40px; padding: 5px 0px 5px 20px; display: inline;
    }
    tr,td ,a{
    color:black;
    }
     tr  td a:hover{
        color:#cccccc;
    }
    section.courses{
        float: left; width:500px;
        border-right: 1px solid black ;
    }
    article{
        overflow: auto;
        clear:both;
        width:100%;
    }
    hgroup{
        margin-top: 20px;
    }
    figure{
        float: left;width: 220px;height:220px;padding:5px;margin: 20px; border: 2px solid black;
    }
    figure img{
        width:220px; height:220p;
    }
    figcaption{
        font-size: 90%;
    }
    aside{
        width:230px; float:left;padding: 0px 0px 0px 20px;
    }
    aside section a{
        display: block; padding: 10px;border-bottom: 1px solid black;
    }
    h1, h2, h3{
        font-weight: normal;
    }
    section.contact {
        margin: 10px 0px 5px 0px; color:green;
    }
   </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>PAINTER.vantran</h1>
            <tr>   
                    <td><a href="#"class="">About </a></td>
                    <td><a href="#"class="">Address   </a></td>
                    <td><a href="#"class="">Procducts </a></td>
                    <td><a href="#"class="">LOGIN     </a></td>
                    <td><a href="#"class="">    </a></td>

          </tr>
          <a href="logout.php"><h1>tahnhcong</h1>
        <button id="submit"name="logout"> Logout</button></a>
          <div><a href="themsp.php">them san pham</a></div>
        </header>
        <section class="courses">
        <?php
    include "DATABASE.php";
    $sql =" SELECT * FROM sanpham";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
 ?>
        <a href="#">
            <article>
                <figure>
                <img width="220px"height="220px"src="image/<?php echo $row['IMAGE']?>" >
                <figcaption><?php echo $row['NAME']?></figcaption>
                </figure>
                <hgroup>
                <p>Auction day : <?php echo $row['WARRANTY']?></p>
                <p>Price :<?php echo $row['PRICE']?></p>
                </hgroup>
                <h3><?php echo $row['ABOUT']?></h3>
                <?php }?>
            </article>
        </a>
       </section>
       <aside>
        <section class="popular">
        <h3>art gallery</h3>
         <a>Abstract painting</a>
         <a>portrait </a>
         <a>landscape</a>
         <a>freedom  </a>
         <p><b>ABOUT :<i>VANTRAN</i><br></b>Started painting in 2019 , when she found 
         some unused wood from a construction site .<br>
        At first , she simpli copied paintings that she found online .<br>
         But over the years , she developed her own painting.... 
        She is currently developing ber skills as an artist and hopes to 
        create more work in th years to come ...</p>
        <a><b>Artist name :<i>VANTRAN</i></b></a><br>
        <p><b>Painting since :<i>2019</i></b></p><br>
        <p>I apprecitate your interest in my work !!!</p>
        &copy; 2019/Vantran.art <br>
        <a href="#"> &copy; /Vantran020396@gmail.com</a>


        </section>
        <section class="contact">
         <h3>contact</h3>
         <p>ART/ <br>address : 79_81 Nguyen dinh chieu <bR> Ham TIEN- MUINE
        <br> phone :452578568596 </p>

        </section>
       </aside>
       
    </div>
    <footer>
        &copy; 2024 Vantran.art
    </footer>
</body>
</html>