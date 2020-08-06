<?php
$conn=mysqli_connect("localhost","root","ursHXMBrgXx026lG");
if(!$conn)
{
    echo "Something went Wrong. Please Check your network connection.";
}
mysqli_select_db($conn,"inventory");