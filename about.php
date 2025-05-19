<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - Luxury Hospitality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
   
  </style>
</head>
<body>

  <!-- Hero Section -->
<div class="position-relative">
  <img src="image/about.jpg" alt="About Banner" class="w-100" style="height: 50vh; object-fit: cover;">
  <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
    <h1 class="fw-bold display-4 text-shadow">About Us</h1>
  </div>
</div>
  <!-- Main About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-md-6">
          <img src="image\hotel3.jpg" alt="About Image" class="about-image">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold mb-3">Welcome to Luxury Hospitality</h2>
          <p>We are committed to providing an exceptional experience where luxury meets comfort. With over 10 years of excellence in the hospitality industry, we’ve earned a reputation for delivering outstanding service, elegant accommodations, and unmatched amenities.</p>
          <p>Our staff is dedicated to making your stay memorable — whether you're here for leisure, business, or a special occasion.</p>
          
          <div class="highlight-box">
            <h5 class="fw-bold">What Makes Us Special?</h5>
            <ul class="mb-0">
              <li>Prime locations near popular destinations</li>
              <li>Luxurious and spacious rooms</li>
              <li>World-class dining and services</li>
              <li>24/7 personalized guest support</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include('footer.php'); ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
