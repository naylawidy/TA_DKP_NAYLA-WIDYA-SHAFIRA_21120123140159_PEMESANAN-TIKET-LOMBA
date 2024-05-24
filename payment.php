<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Payment</h2>
    <form action="process_payment.php" method="post">
        <label for="payment_method">Select Payment Method:</label>
        <select id="payment_method" name="payment_method">
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bank_transfer">Bank Transfer</option>
        </select><br><br>

        <div id="credit_card_info" class="payment_info">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number"><br><br>
            
            <label for="expiration_date">Expiration Date:</label>
            <input type="text" id="expiration_date" name="expiration_date" placeholder="MM/YYYY"><br><br>
            
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv"><br><br>
        </div>

        <div id="paypal_info" class="payment_info" style="display: none;">
            <label for="paypal_email">PayPal Email:</label>
            <input type="email" id="paypal_email" name="paypal_email"><br><br>
        </div>

        <div id="bank_transfer_info" class="payment_info" style="display: none;">
            <label for="bank_name">Bank Name:</label>
            <input type="text" id="bank_name" name="bank_name"><br><br>
            
            <label for="account_number">Account Number:</label>
            <input type="text" id="account_number" name="account_number"><br><br>
        </div>

        <input type="submit" value="Pay">
    </form>

    <script>
        document.getElementById("payment_method").addEventListener("change", function() {
            var payment_method = this.value;
            var payment_infos = document.getElementsByClassName("payment_info");
            for (var i = 0; i < payment_infos.length; i++) {
                payment_infos[i].style.display = "none";
            }
            document.getElementById(payment_method + "_info").style.display = "block";
        });
    </script>
</body>
</html>
