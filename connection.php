<?php
$server="localhost";
$username="root";
$password="";
$dbname="projectteams";


$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("database is not connected");
}


?>