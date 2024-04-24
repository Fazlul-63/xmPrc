<?php
session_start();
?>

<?php
if(isset($_SESSION['user_id'])) {
    $logout_button = '<div class="logout-button">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                     </div>';
    $register_login_buttons = '';
} else {
    $register_login_buttons = '<div class="register-button">
                                 <a href="register.php" class="btn btn-primary">Register</a>
                              </div>
                              <div class="login-button">
                                 <a href="login.php" class="btn btn-secondary">Login</a>
                              </div>';
    $logout_button = '';
}
?>

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
            bottom: 20px; 
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
        }

        .centered-button a.btn {
            font-size: 2.5rem; 
            padding: 20px 80px; 
        }

        .register-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .carousel-item {
            height: 800px;
            margin: 0 auto;
        }
        .card {
            max-width: 300px;
            left: -100px;
            margin: auto;
            margin-top: 50px; 
        }

        .description-container {
    padding: 20px; 
    background-color: #f8f9fa; 
    border-radius: 10px; 
    margin-top: 50px; /* Adjust as needed */
    margin-left: -270px; 
}



        .login-button {
            position: absolute;
            top: 20px;
            right: 120px;
        }
    </style>
</head>
<body>
<?php include "navbar.php"?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../images/eagle.jpg" class="card-img" alt="Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="description-container">
                    <h2>Description</h2>
                    <p>
The Zoo Hotel offers a unique and immersive experience, blending the comfort of a luxury hotel with the excitement of a wildlife sanctuary. Nestled amidst lush greenery, the hotel provides a tranquil escape from the hustle and bustle of city life. Guests are greeted by the soothing sounds of nature and the sight of majestic animals roaming freely in their habitats.

With spacious and well-appointed rooms, the Zoo Hotel ensures a relaxing stay for guests of all ages. Wake up to the chirping of birds and enjoy panoramic views of the surrounding landscape from your private balcony. Indulge in delectable cuisine at the on-site restaurants, featuring a diverse menu inspired by local flavors and international delicacies.

Moreover, the Zoo Hotel offers a range of activities for nature enthusiasts and adventure seekers alike. Embark on guided wildlife tours to observe exotic species up close, or explore the lush trails surrounding the hotel on foot or bicycle. Whether you're seeking a romantic getaway, a family vacation, or a thrilling wildlife adventure, the Zoo Hotel promises an unforgettable experience amidst the beauty of nature.</p>
<div class="text-center">
                    <a href="booking.php" class="btn btn-primary">Book Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../images/eagle.jpg" class="card-img" alt="Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="description-container">
                    <h2>Description</h2>
                    <p>
The Zoo Hotel offers a unique and immersive experience, blending the comfort of a luxury hotel with the excitement of a wildlife sanctuary. Nestled amidst lush greenery, the hotel provides a tranquil escape from the hustle and bustle of city life. Guests are greeted by the soothing sounds of nature and the sight of majestic animals roaming freely in their habitats.

With spacious and well-appointed rooms, the Zoo Hotel ensures a relaxing stay for guests of all ages. Wake up to the chirping of birds and enjoy panoramic views of the surrounding landscape from your private balcony. Indulge in delectable cuisine at the on-site restaurants, featuring a diverse menu inspired by local flavors and international delicacies.

Moreover, the Zoo Hotel offers a range of activities for nature enthusiasts and adventure seekers alike. Embark on guided wildlife tours to observe exotic species up close, or explore the lush trails surrounding the hotel on foot or bicycle. Whether you're seeking a romantic getaway, a family vacation, or a thrilling wildlife adventure, the Zoo Hotel promises an unforgettable experience amidst the beauty of nature.</p>
<div class="text-center">
                    <a href="booking.php" class="btn btn-primary">Book Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../images/eagle.jpg" class="card-img" alt="Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="description-container">
                    <h2>Description</h2>
                    <p>
The Zoo Hotel offers a unique and immersive experience, blending the comfort of a luxury hotel with the excitement of a wildlife sanctuary. Nestled amidst lush greenery, the hotel provides a tranquil escape from the hustle and bustle of city life. Guests are greeted by the soothing sounds of nature and the sight of majestic animals roaming freely in their habitats.

With spacious and well-appointed rooms, the Zoo Hotel ensures a relaxing stay for guests of all ages. Wake up to the chirping of birds and enjoy panoramic views of the surrounding landscape from your private balcony. Indulge in delectable cuisine at the on-site restaurants, featuring a diverse menu inspired by local flavors and international delicacies.

Moreover, the Zoo Hotel offers a range of activities for nature enthusiasts and adventure seekers alike. Embark on guided wildlife tours to observe exotic species up close, or explore the lush trails surrounding the hotel on foot or bicycle. Whether you're seeking a romantic getaway, a family vacation, or a thrilling wildlife adventure, the Zoo Hotel promises an unforgettable experience amidst the beauty of nature.</p>
<div class="text-center">
                    <a href="booking.php" class="btn btn-primary">Book Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugins.js"></script>
</body>
</html>
