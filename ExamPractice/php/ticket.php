<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         body {
            background: rgb(255, 233, 161);
            color: #333;
        }
        .ticket-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .ticket-card {
            width: 18rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
        }

        .ticket-img {
            width: 100%;
            height: auto;
        }

        .ticket-body {
            padding: 1.25rem;
        }

        .ticket-title {
            margin-bottom: 0.5rem;
        }

        .ticket-description {
            margin-bottom: 1rem;
        }

        .ticket-price {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .btn-book-ticket {
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container">
        <div class="ticket-container">
            <!-- Kid Ticket Form -->
            <form action="ticketSelect.php" method="POST" class="card mx-auto" style="width: 18rem;">
        <img src="../images/ticket.jpg" class="card-img-top " alt="Kid Ticket Image">
        <div class="card-body">
            <h5 class="card-title">Kid Ticket</h5>
            <ul style="margin-bottom:87px;">
                <li>Child (3-17 yrs) ticket for a fun-filled day at the zoo.</li>
                <li>Includes access to all zoo exhibits and attractions.</li>
                <li>Save 10% when you book online at least a day in advance.</li>
                <li>Redeem loyalty points for exclusive zoo experiences.</li>
                <li>On-site hotel discount available for ticket holders.</li>
                <li>FREE parking for all visitors.</li>
            </ul>
            <hr>
            <div>
                <input type="hidden" name="ticketName" value="Kid Ticket">
                <input type="hidden" name="ticketPrice" value="32">
                <input type="hidden" name="ticketType" value="child">
                <button name="kidSubmitTicketBtn" class="btn btn-primary" type="submit">Book Ticket</button>
                <span class="btn btn-success">£32</span>
            </div>
        </div>
    </form>
            <form action="ticketSelect.php" method="POST" class="card mx-auto" style="width: 18rem;">
        <img src="../images/ticket.jpg" class="card-img-top" alt="Adult Ticket Image">
        <div class="card-body">
            <h5 class="card-title">Adult Ticket</h5>
            <ul style="margin-bottom:87px;">
                <li>Adult (18+ yrs) ticket for an exciting zoo adventure.</li>
                <li>Explore a wide range of animal species from around the world.</li>
                <li>Save 10% when you book online at least a day in advance.</li>
                <li>Earn loyalty points and unlock special offers.</li>
                <li>Enjoy discounted rates at the on-site hotel.</li>
                <li>FREE parking available for all visitors.</li>
            </ul>
            <hr>
            <div>
                <input type="hidden" name="ticketName" value="Adult Ticket">
                <input type="hidden" name="ticketPrice" value="53">
                <input type="hidden" name="ticketType" value="adult">
                <button class="btn btn-primary" type="submit">Book Ticket</button>
                <span class="btn btn-success">£53</span>
            </div>
        </div>
    </form>

    <!-- Family Ticket Form -->
    <form action="ticketSelect.php" method="POST" class="card mx-auto" style="width: 18rem;">
        <img src="../images/ticket.jpg" class="card-img-top" alt="Family Ticket Image">
        <div class="card-body">
            <h5 class="card-title">Family Ticket</h5>
            <ul style="margin-bottom:87px;">
                <li>Family ticket for 2 adults and 2 children for a memorable day out.</li>
                <li>Babies (Under 3 yrs) enjoy FREE admission.</li>
                <li>Save 10% when you book online at least a day in advance.</li>
                <li>Accumulate loyalty points and access exclusive benefits.</li>
                <li>Avail discounts on on-site hotel bookings with this ticket.</li>
                <li>Complimentary parking facility provided.</li>
            </ul>
            <hr>
            <div>
                <input type="hidden" name="ticketName" value="Family Ticket">
                <input type="hidden" name="ticketPrice" value="75">
                <input type="hidden" name="ticketType" value="family">
                <button class="btn btn-primary" type="submit">Book Ticket</button>
                <span class="btn btn-success">£75</span>
            </div>
        </div>
    </form>

    <!-- Educational Ticket Form -->
    <form action="ticketSelect.php" method="POST" class="card mx-auto" style="width: 18rem;">
        <img src="../images/ticket.jpg" class="card-img-top" alt="Educational Ticket Image">
        <div class="card-body">
            <h5 class="card-title">Educational Ticket</h5>
            <ul>
                <li>Educational admission for a group of 30 students and up to 5 adults for one year.</li>
                <li>Includes guided tours, educational materials, and interactive learning experiences.</li>
                <li>Save 10% when you book online at least a day in advance.</li>
                <li>Gain access to specialized educational programs and workshops.</li>
                <li>Special discounts available for on-site hotel accommodations.</li>
                <li>Free parking facility provided for all educational groups.</li>
            </ul>
            <hr>
            <div>
                <input type="hidden" name="ticketName" value="Educational Ticket">
                <input type="hidden" name="ticketPrice" value="200">
                <input type="hidden" name="ticketType" value="educational">
                <button class="btn btn-primary" type="submit">Book Ticket</button>
                <span class="btn btn-success">£200</span>
            </div>
        </div>
    </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
