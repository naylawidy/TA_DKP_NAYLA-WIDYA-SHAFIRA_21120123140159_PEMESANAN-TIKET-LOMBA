<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background image"><ldiv>
    <div class="container">
        <h2 class="header">Purchase Ticket</h2>
        <p class="htm">HTM 15.000</p>
        <form action="payment.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="event">Event:</label>
            <select id="event" name="event">
                <?php
                
                $events = array("futsal", "paskibra", "basket", "saman"); 

                function displayEvents($events) { // 
                    foreach ($events as $event) {
                        echo "<option value='$event'>$event</option>";
                    }
                }

                displayEvents($events);
                ?>
            </select><br><br>
            
            <label for="quantity">Ticket Quantity:</label>
            <input type="number" id="quantity" name="quantity" required><br><br>

            <label for="school">Which school do you support?</label>
            <input type="text" id="school" name="school" required><br><br>
            
            <input type="submit" value="Purchase">
        </form>
    </div>
</body>
</html>
