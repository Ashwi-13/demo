<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Luxury Hospitality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    
  </style>
</head>
<body>

<section class="contact-section">
  <div class="container">
    <h2 class="section-title">Contact Us</h2>
    <div class="row g-5">

      <!-- Contact Form -->
      <div class="col-md-7">
        <div class="contact-card">
          <form>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="Your Name">
              <label for="name">Your Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="Your Email">
              <label for="email">Your Email</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subject" placeholder="Subject">
              <label for="subject">Subject</label>
            </div>

            <div class="form-floating mb-4">
              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
              <label for="message">Your Message</label>
            </div>

            <button type="submit" class="btn btn-send">Send Message</button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="contact-card h-100 d-flex flex-column justify-content-center">
          <div class="contact-info">
            <p><i class="bi bi-geo-alt-fill"></i> 123 Royal Lane, New Delhi, India</p>
            <p><i class="bi bi-envelope-fill"></i> contact@luxuryhospitality.com</p>
            <p><i class="bi bi-telephone-fill"></i> +91 98765 43210</p>
            <p><i class="bi bi-clock-fill"></i> Mon - Sat: 9:00 AM - 8:00 PM</p>
            <hr>
            <p>Need urgent help? Visit our <a href="#">support center</a>.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php include('footer.php'); ?>
<!-- Bootstrap JS + Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
