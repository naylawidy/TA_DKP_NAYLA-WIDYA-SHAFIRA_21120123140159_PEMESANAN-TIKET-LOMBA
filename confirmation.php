<?php
// confirmation.php //orientasi program 1 class,
require_once 'Ticket.php'; // m5 orientasi prog class 

<?php
// confirmation.php

// Mengimpor definisi kelas Ticket
require_once 'Ticket.php';

$name = htmlspecialchars($_GET['name']);
$event = htmlspecialchars($_GET['event']);
$quantity = htmlspecialchars($_GET['quantity']);

$ticket = new Ticket($name, $event, $quantity);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Confirmation</title>
</head>
<body>
    <h2>Purchase Confirmation</h2>
    <p><?php echo $ticket->displayConfirmation(); ?></p>
</body>
</html>


