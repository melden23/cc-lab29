<?php
include 'db.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM menu_items WHERE id=$id";

    if($conn->query($sql)===TRUE){
        echo"deletion successful";
    }
    else{
        echo"error:".$conn->error;
    }
}
$conn->close();
header("location:index.php");
?>