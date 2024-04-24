<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
  </div>
</nav>

<style>
body {
  background: rgb(255, 233, 161);
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
            color: #fbff00 !important;
        }

/* Container for the payment form */
.form-container {
  max-width: 400px;
  margin: 50px auto;
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styling form elements */
.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.form-control:focus {
  outline: none;
  border-color: #007bff;
}

.form-group label {
  font-weight: bold;
}

/* Styling the payment button */
.form-btn {
  margin-top: 20px;
}

.bi-credit-card-fill {
  vertical-align: middle;
  margin-left: 5px; /* Adjust the margin as needed */
}

.btn-primary {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #0056b3;
}

</style>

<div class="form-container">
<form action="process_payment.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="card_number" placeholder="Card Number">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="card_holder" placeholder="Card Holder Name">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="expiry_date" placeholder="Expiry Date (MM/YYYY)">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="cvv" placeholder="CVV">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
        </svg>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="billing_address" placeholder="Billing Address">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="city" placeholder="City">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="postcode" placeholder="Postcode">
    </div>
    <div><p> Want to add payment detail later? <a href="homepage.php">Continue here</a></p></div>
    <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="Pay Now" name="submit">
    </div>
</form>


</div>
</body>
</html>