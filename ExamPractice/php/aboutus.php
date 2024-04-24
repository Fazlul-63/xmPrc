<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Hotel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        /* Custom CSS */
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
            position: absolute;
            top: 90%; /* Adjust the vertical position */
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered-button a.btn {
            font-size: 2.5rem; /* Adjust the button size */
            padding: 20px 80px; /* Adjust the button padding */
        }

        /* Added CSS for the Register and Login buttons */
        .register-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .login-button {
            position: absolute;
            top: 20px;
            right: 150px; /* Adjust the horizontal position */
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
          <a class="nav-link" href="#">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Zoo tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="information.php">Information</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="">About us</a>
        </li>
      </ul>
    </div>
    <!-- Register button -->
    <div class="register-button">
        <a href="register.php" class="btn btn-primary">Register</a>
    </div>
    <!-- Login button -->
    <div class="login-button">
        <a href="login.php" class="btn btn-secondary">Login</a>
    </div>
  </div>
</nav>

<!-- Content Container -->
<div class="container content-container">
    <!-- Your content goes here -->
    <h1>Exploring The Rich history of Zoo Hotel</h1>
    <p>Zoo hotels, a unique blend of wildlife conservation and hospitality, have a rich and fascinating history that spans centuries. These establishments offer guests the opportunity to immerse themselves in the wonders of nature while enjoying comfortable accommodations and exceptional service. Let's delve into the captivating story of zoo hotels and explore how they have evolved over time.

The concept of zoo hotels can be traced back to ancient civilizations where exotic animals were often kept for royal entertainment and prestige. In ancient Egypt, for example, pharaohs maintained private menageries filled with exotic creatures from distant lands. These collections served as symbols of power and wealth, and some historians speculate that accommodations for royal guests might have been adjacent to these animal enclosures, laying the groundwork for the modern zoo hotel concept.

Fast forward to the medieval era, and we find examples of royal menageries and private collections becoming more common across Europe and Asia. Kings and nobles showcased their exotic animals to demonstrate their global reach and dominance. It wasn't until the Renaissance, however, that the idea of combining wildlife exhibits with hospitality began to take shape.

During the Renaissance, explorers brought back exotic animals from their voyages to far-off lands. These creatures sparked immense curiosity among the public, leading to the establishment of the first modern zoological gardens. These early zoos were often private collections owned by wealthy individuals or royal families, but they gradually opened their doors to the public.

As the popularity of zoos grew, so did the demand for accommodations near these attractions. Visitors wanted to extend their experiences beyond a single day, prompting entrepreneurs to build hotels in close proximity to zoological gardens. These establishments offered guests the convenience of staying near the zoo while providing a comfortable retreat after a day of exploration.

The 20th century witnessed significant advancements in both zoo management and hospitality, leading to the rise of purpose-built zoo hotels. These establishments were designed to seamlessly integrate with the surrounding zoo environment, offering guests unparalleled access to wildlife while maintaining the highest standards of comfort and luxury.

One of the most iconic examples of a zoo hotel is the Jamala Wildlife Lodge in Canberra, Australia. Located within the grounds of the National Zoo and Aquarium, Jamala offers guests the opportunity to sleep next to lions, tigers, and bears in luxurious safari-style accommodations. This innovative concept has captured the imagination of travelers worldwide, demonstrating the enduring appeal of zoo hotels.

In recent years, zoo hotels have evolved to focus not only on guest comfort but also on conservation and education. Many establishments partner with zoological organizations to support wildlife conservation efforts and promote environmental awareness among guests. These initiatives align with the growing trend of responsible tourism, where travelers seek meaningful experiences that contribute to positive change.

Looking ahead, the future of zoo hotels appears bright, with continued innovation driving the industry forward. From immersive wildlife encounters to sustainable practices, zoo hotels are poised to redefine the intersection of hospitality and conservation. As travelers increasingly prioritize experiences that connect them with nature and culture, zoo hotels are well-positioned to fulfill this demand.

In conclusion, the history of zoo hotels is a testament to humanity's fascination with the natural world and our desire to coexist harmoniously with wildlife. From ancient menageries to modern luxury lodges, these establishments have evolved to offer guests unforgettable experiences that blend adventure, comfort, and conservation. As we continue to cherish and protect our planet's biodiversity, zoo hotels will undoubtedly play a vital role in shaping the future of travel and environmental stewardship.</p>
</div>


<div class="centered-button">
    <a href="register.php" class="btn btn-primary btn-lg">Book</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugins.js"></script>
</body>
</html>
