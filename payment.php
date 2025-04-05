<html>

<body>

<h2>Payment Form</h2>

<style>
        body {
            background-color: lightblue;
            color: purple;
        }
    </style>

<form action="congrats.php" method="POST">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="card_number">Credit Card Number:</label>
    <input type="text" id="card_number" name="card_number" required><br><br>

    <label for="expiry_date">Expiry Date (MM/YY):</label>
    <input type="text" id="expiry_date" name="expiry_date" required><br><br>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" required><br><br>

    <label for="amount">Amount ($):</label>
    <input type="number" id="amount" name="amount" step="0.01" required><br><br>

    <button type="submit">Pay Now</button>
</form>
<body style="background-color: lightblue;">

</body>
</html>