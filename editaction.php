<?php
include 'db.php';

if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $description = $_GET['description'];

    $sql = "UPDATE menu_items SET name='$name', price=$price, description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Update successful!";
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid data!";
}
$conn->close();
?>
