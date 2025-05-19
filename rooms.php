<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Rooms - Luxury Hospitality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet">
  <!-- Custom CSS -->
  
</head>
<body>
  <!-- Hero Section -->
  <div class="hero-rooms position-relative">
  <img src="image/room.jpg" alt="Hero Image" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" style="z-index: 0; opacity: 0.7;">
  <div class="container position-relative text-center text-white" style="z-index: 1;">
    <h1 class="display-4 fw-bold">Our Rooms</h1>
  </div>
</div>

  <!-- Rooms Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Choose Your Comfort</h2>
      <div class="row g-4">

        <!-- Room 1 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room1.jpg" alt="Deluxe Room" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Deluxe Room</h5>
              <p>Elegant room with a king-size bed, city view, WiFi, and complimentary breakfast.</p>
              <p class="text-primary fw-bold mb-2">₹4,999 / night</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>
            </div>
          </div>
        </div>

        <!-- Room 2 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room2.jpg" alt="Executive Suite" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Executive Suite</h5>
              <p>Spacious suite with separate living area, premium amenities, and ocean view.</p>
              <p class="text-primary fw-bold mb-2">₹7,999 / night</p>
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>
            </div>
          </div>
        </div>

        <!-- Room 3 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room3.jpg" alt="Presidential Suite" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Presidential Suite</h5>
              <p>Ultimate luxury suite with private balcony, Jacuzzi, minibar, and VIP service.</p>
              <p class="text-primary fw-bold mb-2">₹12,999 / night</p>
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>
            </div>
          </div>
        </div>

        <!-- Room 4 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room4.jpg" alt="Family Suite" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Family Suite</h5>
              <p>Spacious suite with two bedrooms, living area, and kid-friendly amenities.</p>
              <p class="text-primary fw-bold mb-2">₹8,499 / night</p>
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>
            </div>
          </div>
        </div>

        <!-- Room 5 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room5.jpg" alt="Honeymoon Suite" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Honeymoon Suite</h5>
              <p>Romantic suite with ocean view, private terrace, and special amenities.</p>
              <p class="text-primary fw-bold mb-2">₹10,999 / night</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>
            </div>
          </div>
        </div>

        <!-- Room 6 -->
        <div class="col-md-4">
          <div class="room-card shadow rounded overflow-hidden">
            <img src="image/room6.jpg" alt="Single Room" class="img-fluid" />
            <div class="p-4 room-details">
              <h5 class="fw-bold">Single Room</h5>
              <p>Cozy room perfect for solo travelers with all essential amenities.</p>
              <p class="text-primary fw-bold mb-2">₹3,499 / night</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">
  Book Now
</button>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form>
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="bookingModalLabel">Book Your Room</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" placeholder="Your name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" placeholder="you@example.com" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="tel" class="form-control" placeholder="+91-XXXXXXXXXX" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Select Room Type</label>
              <select class="form-select" required>
                <option selected disabled>Choose a room</option>
                <option>Deluxe Room</option>
                <option>Executive Suite</option>
                <option>Presidential Suite</option>
                <option>Family Suite</option>
                <option>Honeymoon Suite</option>
                <option>Single Room</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Check-In Date</label>
              <input type="date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Check-Out Date</label>
              <input type="date" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Guests</label>
              <select class="form-select" required>
                <option>1 Guest</option>
                <option>2 Guests</option>
                <option>3 Guests</option>
                <option>4+ Guests</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">No. of Rooms</label>
              <select class="form-select" required>
                <option>1 Room</option>
                <option>2 Rooms</option>
                <option>3+ Rooms</option>
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success w-100">Confirm Booking</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
