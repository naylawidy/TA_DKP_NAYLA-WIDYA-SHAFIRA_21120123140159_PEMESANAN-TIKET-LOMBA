<?php
// confirmation.php
$name = htmlspecialchars($_GET['name']);
$event = htmlspecialchars($_GET['event']);
$quantity = htmlspecialchars($_GET['quantity']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Confirmation</title>
</head>
<body>
    <h2>Purchase Confirmation</h2>
    <p>Thank you, <?php echo $name; ?>, for purchasing <?php echo $quantity; ?> ticket(s) for <?php echo $event; ?>.</p>
</body>
</html>
