<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo hotel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

.register-button {
  position: absolute;
  top: 20px;
  right: 20px;
}

.card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card {
            margin-bottom: 20px;
        }
      
.login-button {
position: absolute;
top: 20px;
right: 120px; /* Adjust the horizontal position */
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
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
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
      </ul>
    </div>
    <div class="register-button">
        <a href="register.php" class="btn btn-primary">Register</a>
    </div>
    <div class="login-button">
        <a href="login.php" class="btn btn-secondary">Login</a>
    </div>
  </div>
</nav>


<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="../images/eagle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="ticket.php" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="../images/eagle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="ticket.php" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="../images/eagle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="ticket.php" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="../images/eagle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="ticket.php" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    flatpickr(".datepicker", {
        dateFormat: "Y-m-d"
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugins.js"></script>
</body>
</html>


