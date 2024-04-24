<?php 
session_start();
require "../classes/ticketClass.php";
$ticket = new ticket(); 

// Handle adding ticket button click
if(isset($_POST["addTicketBtn"])) {
    header("Location:ticket.php");
    exit();
}

// Handle removing item from cart
if (isset($_POST['removeItem'])) {
    $ticketType = $_POST['ticketType'] ?? null;
    $specialRequirements = $_POST['specialRequirements'] ?? null;
    $date = $_POST['date'] ?? null;
    if (isset($ticketType) && isset($specialRequirements)) {
        $ticket->removeFromCart($ticketType, $specialRequirements, $date);
        header("Refresh:0");  // Refresh the page to update the cart display
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require "navbar.php"?>
    
<div class="container border mt-5">
    <?php
    if (!empty($_SESSION['cart'])) {
        echo "<table class='table'>";
        echo "<tr><th>Type</th><th>Total Price</th><th>Quantity</th><th>Special Requirements</th><th>Date</th><th>Actions</th></tr>";
        foreach ($_SESSION['cart'] as $item) {
            echo "<tr>";
            echo "<td>{$item['type']}</td>"; 
            echo "<td>{$item['totalPrice']}</td>"; 
            echo "<td>{$item['quantity']}</td>";
            echo "<td>{$item['specialRequirements']}</td>";
            echo "<td>{$item['date']}</td>";
            echo "<td>
                <form method='POST' action='ticketCart.php'>
                    <input type='hidden' name='ticketType' value='{$item['type']}'>
                    <input type='hidden' name='specialRequirements' value='{$item['specialRequirements']}'>
                    <input type='hidden' name='date' value='{$item['date']}'>
                    <button type='submit' name='removeItem' class='btn btn-danger'>Remove</button>
                </form>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<div class ='text-center'>Your cart is empty.</div>";
    }
    ?>

    <form method="POST" class="text-center">
        <?php if (!empty($_SESSION['cart'])) { ?>
            <button class="btn btn-primary" name="confirmBookingBtn">Confirm Bookings</button>
        <?php } ?>
        <button name="addTicketBtn" type="submit" class="btn btn-primary">Add tickets</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
