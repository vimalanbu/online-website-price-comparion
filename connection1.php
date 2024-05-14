<?php
$servername ="localhost";
$username ="root";
$password ="";
$db_name ="online_comparion";
$connection = mysqli_connect($servername,$username,
$password);

$connection1= mysqli_select_db($connection,$db_name);

if(!$connection1)
{
    //echo("connection terminated");
}
?>