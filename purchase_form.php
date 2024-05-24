<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Purchase Ticket</h2>
    <form action="process_purchase.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="event">Event:</label>
        <select id="event" name="event">
            <option value="futsal">futsal</option>
            <option value="paskibra">paskibra</option>
            <option value="basket">basket</option>
            <option value="saman">saman</option>
        </select><br><br>
        
        <label for="quantity">Ticket Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="school">Which school do you support?</label>
        <input type="text" id="school" name="school" required><br><br>
        
        <input type="submit" value="Purchase">
    </form>
</body>
</html>
