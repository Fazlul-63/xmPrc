<?php
session_start();

require "ticketClass.php";
$ticket = new ticket();

// Initialize variables
$selectedTicketName = "";
$selectedTicketPrice = "";
$selectedTicketType = "";

// Process form submission
if(isset($_POST['basketAddBtn'])){
    $ticket->addToCart($_POST['ticketType'], $_POST['QauntityBox'], $_POST['specialRequirements'] ?? '', $_POST['date']);
    header("location:ticketCart.php");
    exit();
}

// Get selected ticket details if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['ticketName'])) {
        $selectedTicketName = $_POST['ticketName'];
    }
    if (isset($_POST['ticketPrice'])) {
        $selectedTicketPrice = $_POST['ticketPrice'];
    }
    if (isset($_POST['ticketType'])) {
        $selectedTicketType = $_POST['ticketType'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
<?php require_once "navbar.php";  ?>

<!-- Ticket Form -->
<div class="container mx-auto">
    <h1><?php echo $selectedTicketType?> (£<?php echo $selectedTicketPrice?>)</h1>
    <hr>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <h3>Choose a time for your booking:</h3><br>
        <label for="date">Date</label>
        <input type="text" id="date" name="date" placeholder="Select Date.." readonly="readonly" min="today" max="today + 10 days" />
        <input type='hidden' id='hiddenStartDate' name='selectedDate' value=''>
        <button type="button" class="btn btn-light" id="dateRangeClear">Clear</button>
        
        <label for="specialRequirements">Special Requirements</label>
        <input id="specialRequirements" type="text" name="specialRequirements">

        <div class="input-group mb-3">
            <label>Quantity</label>
            <button id="decrement-btn" class="btn btn-outline-secondary" type="button">-</button>
            <input name="QauntityBox" id="Quantity" type="text" class="form-control" value="0" aria-label="Enter Amount" readonly>
            <button id="increment-btn" class="btn btn-outline-secondary" type="button">+</button>
        </div>

        <input type="hidden" name="dateSelected" value="<?php echo htmlspecialchars($_POST['selectedDate'] ?? '') ?>">
        <input type="hidden" name="ticketType" value="<?php echo htmlspecialchars($selectedTicketType) ?>">
        <input type="hidden" name="ticketPrice" value="<?php echo htmlspecialchars($selectedTicketPrice) ?>">

        <button type="submit" name="basketAddBtn" id="addToBasketBtn" class="btn btn-primary">Add to basket</button>
    </form>
</div>

<!-- Include necessary scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../scripts/ticket.js"></script>
</body>
</html>
