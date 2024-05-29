<?php
// process_purchase.php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']); 
    $email = $conn->real_escape_string($_POST['email']);
    $event = $conn->real_escape_string($_POST['event']);
    $quantity = $conn->real_escape_string($_POST['quantity']); 

    $sql = "INSERT INTO ticket_sales (name, email, event, quantity) VALUES ('$name', '$email', '$event', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmation.php?name=$name&event=$event&quantity=$quantity");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
