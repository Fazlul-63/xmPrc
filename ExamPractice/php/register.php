<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    .container {
        max-width: 600px;
        margin: 50px auto 0;
        padding: 30px; /* Adjusted padding */
        color: #343a40; /* Changed text color to match navbar */
        background-color: #ffffff; /* Changed background color to white */
        border-radius: 15px;
        box-shadow: 0px 7px 29px 0px rgba(0, 0, 0, 0.3); /* Adjusted box shadow */
    }

    .form-group {
        margin-bottom: 20px; /* Adjusted margin bottom */
    }

    .form-btns {
        display: flex;
        justify-content: space-between; /* Used space-between to evenly distribute items */
        margin-top: 20px; /* Added margin top */
    }

    .form-btns > div {
        display: flex;
        align-items: center;
    }

    .form-btns > div:nth-child(2) input[type="submit"] {
        margin-right: 10px;
    }
</style>

<div class="container">
    <?php
    if (isset($_POST["submit"])) {
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $errors = array();

        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordRepeat)) {
            array_push($errors, "All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
        }
        if ($password !== $passwordRepeat) {
            array_push($errors, "Password does not match");
        }

        require_once "database.php";

        $sql = "SELECT * FROM cutomers WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            array_push($errors, "Email already exists!");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO cutomers (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        }
    }
    ?>

    <form action="register.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
        </div>
        <div class="form-btns">
            <div>
                <p class="m-0">Already Registered? <a href="login.php">Login Here</a></p>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
                <a href="cardpayment.php" class="btn btn-secondary">Add payment method</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
