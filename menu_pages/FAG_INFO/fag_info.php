<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FAQ / Info | LOUD Streetz</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
  <style>
    h2, h3 {
      color: darkgray;
    }
    .accordion-button {
      background-color: #222;
      color: #cfcfcf;
    }
    .accordion-body {
      background-color: #111;
      color: #cfcfcf80;
    }
  </style>
</head>
<body style="background-color: black; color: #cfcfcf80;" role="document">

<nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-center align-items-center"> 
    <div class="d-flex">
      <ul class="navbar-nav" style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="../Tours/tours.php">Tours</a></li>
        <li class="nav-item"><a class="nav-link" href="../BookHotel/book.php">Book Hotel</a></li>
      </ul>
    </div>
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="../../index.php" style="width:300px;height:80px;margin: 0; padding: 0;">
      <img src="../../images/logo.png" alt="LOUD Streetz Logo" />
    </a>
    <div class="d-flex">
      <ul class="navbar-nav" style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="../Shop/shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="fag_info.php">FAQ/INFO</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-5" id="main-content" role="main" aria-labelledby="faq-title">
  <h2 id="faq-title">Frequently Asked Questions (FAQ)</h2>
  <div class="accordion accordion-flush" id="faqAccordion">
    
    <div class="accordion-item">
      <h3 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
          What is Loud Streetz?
        </button>
      </h3>
      <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Loud Streetz is a platform dedicated to rap and hip-hop festivals around the world. We connect fans with tour dates, hotels, merch, and more.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h3 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
          How do I book a hotel through Loud Streetz?
        </button>
      </h3>
      <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Visit our <a href="../BookHotel/book.php" style="color:darkgray;">Book Hotel</a> page, choose your destination and date, and follow the booking instructions.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h3 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
          Can I buy official merch here?
        </button>
      </h3>
      <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes! Browse our <a href="../Shop/shop.php" style="color:darkgray;">Shop</a> for official Loud Streetz apparel and accessories.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h3 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
          How do I get my ticket or refund?
        </button>
      </h3>
      <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Ticketing is managed by third parties. Check your confirmation email for details. For refunds, contact the original ticket provider.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h3 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
          Where can I find event updates?
        </button>
      </h3>
      <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Follow us on social media or visit the <a href="../Media/media.php" style="color:darkgray;">Media</a> section for the latest festival updates, artist lineups, and announcements.
        </div>
      </div>
    </div>

  </div>
</main>

<footer style="background-color: black;">
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-around align-items-center">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="fag_info.php">FAQ/INFO</a></li>
        <li class="nav-item"><a class="nav-link" href="../Media/media.php">MEDIA</a></li>
        <li class="nav-item"><a class="nav-link" href="../Privacy_policy/privacy.php">PRIVACY POLICY</a></li>
        <li class="nav-item"><a class="nav-link" href="../Terms_Use/TermsUse.php">TERMS OF USE</a></li>
        <li class="nav-item"><a class="nav-link" href="../Acessibilty/acessibility.php">ACCESSIBILITY</a></li>
      </ul>
    </div>
  </nav>
  <div class="container py-3">
    <p class="text-center" style="font-size: 0.875rem;">
      Loud StreetX LLC is committed to accessibility. If you need help, call +212 5 35 22 10 42. Offices in Fes, Casablanca, Agadir, and Rabat.
    </p>
  </div>
</footer>
<script src="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
