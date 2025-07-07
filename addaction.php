<?php
include 'db.php';

$name=$_GET['name'];
$price=$_GET['price'];
$description=$_GET['description'];

$sql="INSERT INTO menu_items(name,price,description)VALUES('$name',$price,'$description')";

if($conn->query($sql)===TRUE)
{
    echo "insertion successful";
    header("Location: index.php");
    exit();
}
else{
    echo"error:".$conn->error;
}
$conn->close();
?>