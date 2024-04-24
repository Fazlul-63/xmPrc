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

        /* Added CSS for the Register and Login buttons */
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
          <a class="nav-link" href="informtion.php">Information</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
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
    <h1>Zoos: Preserving Wildlife, Educating Generations</h1>
    <p>Zoos, often referred to as zoological parks or gardens, are establishments where animals are housed within enclosures, displayed to the public, and bred for conservation, research, and educational purposes. These institutions play a crucial role in wildlife conservation, biodiversity preservation, and public education. Let's delve deeper into the multifaceted world of zoos, exploring their history, significance, controversies, and future directions.</p>
</div>
<!-- Content Container -->
<div class="container content-container">
    <!-- Your content goes here -->
    <h1>History of Zoos: From Menageries to Modern Parks</h1>
    <p>The history of zoos can be traced back thousands of years to ancient civilizations, where rulers and nobles kept exotic animals as symbols of power and prestige. These early collections, known as menageries, were often private and exclusive, catering to the elite class. For example, ancient Egypt boasted royal menageries filled with lions, elephants, and exotic birds, while Chinese emperors maintained elaborate gardens housing a variety of wildlife.

The concept of public zoos began to emerge during the Renaissance, fueled by a growing interest in natural history and exploration. European explorers brought back exotic animals from their voyages, sparking immense curiosity among the public. In the 18th and 19th centuries, zoological gardens became popular attractions in major cities across Europe and North America. These early zoos were often more focused on entertainment than conservation, with animals housed in small, barren enclosures for public viewing.

The modern zoo movement gained momentum in the late 19th and early 20th centuries with the establishment of organizations dedicated to wildlife conservation and education. Visionary individuals such as Carl Hagenbeck revolutionized zoo design by introducing naturalistic habitats that mimicked animals' native environments. This shift marked a turning point in the evolution of zoos, emphasizing the importance of animal welfare, enrichment, and conservation.</p>
</div>
<!-- Content Container -->
<div class="container content-container">
    <!-- Your content goes here -->
    <h1>Significance of Zoos: Conservation, Research, and Education</h1>
    <p>Zoos play a vital role in global conservation efforts, serving as arks of biodiversity for endangered species facing extinction in the wild. Through captive breeding programs, zoos help bolster populations of threatened animals and reintroduce them into their natural habitats. For example, the California condor, once on the brink of extinction, was successfully bred in captivity and reintroduced into the wild thanks to collaborative efforts between zoos and conservation organizations.

In addition to conservation, zoos contribute to scientific research aimed at understanding animal behavior, physiology, and ecology. Researchers study captive animals to gain insights into their biology and reproductive biology, which can inform conservation strategies for wild populations. Zoos also serve as living laboratories for studying animal cognition, communication, and social dynamics, providing valuable data for comparative studies and species management.

Perhaps most importantly, zoos play a crucial role in public education and outreach, inspiring visitors to develop a deeper appreciation for wildlife and the natural world. Through interpretive exhibits, interactive displays, and educational programs, zoos foster environmental literacy and promote conservation-minded attitudes and behaviors. Visitors of all ages have the opportunity to learn about biodiversity, ecosystems, and the importance of protecting threatened species and habitats.</p>
</div>
<!-- Content Container -->
<div class="container content-container">
    <!-- Your content goes here -->
    <h1>Controversies and Ethical Considerations</h1>
    <p>Despite their noble intentions, zoos have faced criticism and controversy over the years, particularly regarding animal welfare, captivity, and ethical considerations. Critics argue that keeping animals in captivity for public display can be detrimental to their physical and psychological well-being, leading to stress, stereotypic behaviors, and reduced lifespans. Concerns have also been raised about the ethics of breeding animals in captivity for conservation purposes, especially when genetic diversity is limited, and reintroduction efforts are unsuccessful.

Furthermore, the practice of capturing wild animals for display in zoos has come under scrutiny due to its impact on wild populations and ecosystems. While many zoos now prioritize captive breeding and conservation efforts over wild capture, the legacy of past practices continues to raise ethical questions about the role of zoos in wildlife management and conservation.</p>
</div>
<!-- Content Container -->
<div class="container content-container">
    <!-- Your content goes here -->
    <h1>Future Directions: Towards Sustainable and Ethical Practices</h1>
    <p>In response to these challenges, zoos are evolving to embrace more sustainable and ethical practices that prioritize animal welfare, conservation, and education. Many modern zoos have shifted away from traditional cage and concrete enclosures towards naturalistic habitats that provide enrichment and stimulation for animals. These habitats feature vegetation, water features, and other elements that mimic the animals' natural environments, promoting physical and psychological well-being.

Moreover, zoos are increasingly engaging in collaborative conservation initiatives with conservation organizations, government agencies, and local communities to protect threatened species and habitats. Through field conservation projects, habitat restoration efforts, and community outreach programs, zoos are making tangible contributions to global biodiversity conservation.

Educational programming remains a cornerstone of zoo operations, with zoos offering a wide range of interactive experiences and learning opportunities for visitors of all ages. From behind-the-scenes tours and keeper talks to interactive exhibits and conservation workshops, zoos are striving to inspire a new generation of conservationists and environmental stewards.

In conclusion, zoos continue to play a vital role in wildlife conservation, research, and education, despite ongoing challenges and controversies. By embracing sustainable and ethical practices, prioritizing animal welfare, and fostering a deeper connection between people and the natural world, zoos are poised to make meaningful contributions to global biodiversity conservation in the 21st century and beyond.</p>
</div>

<div class="centered-button">
    <a href="register.php" class="btn btn-primary btn-lg">Book</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugins.js"></script>
</body>
</html>
