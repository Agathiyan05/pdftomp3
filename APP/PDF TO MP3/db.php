<?php
$con=mysqli_connect("localhost","root","","pdf-mp3");
if($con){
    echo "DB connected";
}
else{
    echo "DB not connected";
}
?>