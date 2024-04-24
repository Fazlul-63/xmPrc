<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo hotel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        body {
            background: rgb(255, 233, 161);
            color: #333;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #343a40 !important;
            height: 90px;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #17a2b8 !important;
        }

        .centered-button {
            position: fixed;
            bottom: 20px; /* Adjust the vertical position from the bottom */
            left: 50%;
            transform: translateX(-50%);
            z-index: 999; /* Ensure the button stays above other content */
        }

        .centered-button a.btn {
            font-size: 2.5rem; /* Adjust the button size */
            padding: 20px 80px; /* Adjust the button padding */
        }

        #datepicker-container {
            position: absolute;
            top: 20%;
            left: 50px; /* Adjust the left position */
            transform: translateY(-50%);
        }

        /* Make the date picker bigger */
        #datepicker {
            font-size: 20px;
            padding: 15px;
            width: 400px; /* Adjust width as needed */
        }

        /* Style the book button */
        .btn-book {
            font-size: 20px;
            padding: 15px 30px;
        }

        .register-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .login-button {
            position: absolute;
            top: 20px;
            right: 120px; /* Adjust the horizontal position */
        }

        /* Style for the popup */
        #popup {
        top: 50%; /* Position vertically at the middle */
        right: 50px; /* Adjust the distance from the right */
        transform: translateY(-50%); /* Center the popup vertically */
        z-index: 1000;
    }

    #popup .card {
        max-width: 300px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hotel.php">Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="zootickets.php">Zoo tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="information.php">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
            </ul> <!-- missing closing tag for ul -->
        </div>
        <div class="register-button">
            <a href="register.php" class="btn btn-primary">Register</a>
        </div>
        <div class="login-button">
          <a href="login.php" class="btn btn-secondary">Login</a>
        </div>
    </div>
</nav>

<div id="datepicker-container">
    <input type="text" id="datepicker" placeholder="Select Date">
    <button class="btn btn-primary btn-book">Book</button>
</div>

<div id="popup">
    <div class="card">
        <div class="card-header">Selected Dates</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="selected-dates">
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#datepicker", {
        dateFormat: "Y-m-d", // Format of the selected date
        minDate: "today", // Set the minimum selectable date to today
        mode: "range", // Allow selecting a range of dates
        onClose: function(selectedDates, dateStr, instance) {
            // Send selected dates to the server
            $.ajax({
                url: "process_dates.php",
                type: "POST",
                data: { dates: selectedDates },
                success: function(response) {
                    // Update the popup with the returned table
                    $("#selected-dates").html(response);
                    $("#popup").removeClass("d-none");
                }
            });
        }
    });
</script>
</body>
</html>
