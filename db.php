<?php
//<!--version 1.1 -->
$servername="localhost";
$username="root";
$password="student";
$dbname="menu_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);

}
?>