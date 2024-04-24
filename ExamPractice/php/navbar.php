<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
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
        .register-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .login-button {
            position: absolute;
            top: 20px;
            right: 120px;
        }
</style>
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
        </div>
        <div class="register-button">
            <a href="register.php" class="btn btn-primary">Register</a>
        </div>
        <div class="login-button">
          <a href="login.php" class="btn btn-secondary">Login</a>
        </div>
    </div>
</nav>
</body>
</html>