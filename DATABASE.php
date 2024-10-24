<?php
$server ="localhost"; $user ="root" ; $pass =""; $database ="kingofsandwich";
$conn = new mysqli($server, $user, $pass , $database);
if($conn){
    mysqli_query($conn , "SET NAMEs 'utf8' ");
}


?>