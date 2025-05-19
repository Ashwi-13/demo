<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exclusive Hotel Offers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    .offers-section {
      background: linear-gradient(to right, #1f1c2c, #928dab);
      color: white;
    }

    .card-img-top {
      height: 220px;
      object-fit: cover;
    }

    .card {
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .btn-outline-warning:hover {
      background-color: #ffc107;
      color: #000;
    }
  </style>
</head>
<body>

  <!-- Offers Section -->
  <section class="offers-section py-5 text-white">
    <div class="container text-center">
      <h2 class="display-5 fw-bold mb-4">Exclusive Offers Just for You</h2>
      <p class="lead mb-5">Escape the ordinary with our handpicked hotel deals — luxury stays, spa packages, and gourmet experiences at unbeatable prices.</p>

      <div class="row g-4">
        <!-- Offer 1 -->
        <div class="col-md-4">
          <div class="card bg-dark border-0 shadow-lg h-100">
            <img src="image/offer1.jpg" class="card-img-top" alt="Luxury Stay">
            <div class="card-body">
              <h5 class="card-title fw-bold text-warning">Luxury Weekend Getaway</h5>
              <p class="card-text">Enjoy 2 nights in a deluxe suite with complimentary breakfast and spa access.</p>
              <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#offerModal1">View Details</button>
            </div>
          </div>
        </div>

        <!-- Offer 2 -->
        <div class="col-md-4">
          <div class="card bg-dark border-0 shadow-lg h-100">
            <img src="image/offer2.jpg" class="card-img-top" alt="Fine Dining">
            <div class="card-body">
              <h5 class="card-title fw-bold text-warning">Gourmet Dining Experience</h5>
              <p class="card-text">Savor a 5-course candlelight dinner crafted by top chefs at our luxury hotel.</p>
              <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#offerModal2">View Details</button>
            </div>
          </div>
        </div>

        <!-- Offer 3 -->
        <div class="col-md-4">
          <div class="card bg-dark border-0 shadow-lg h-100">
            <img src="image/offer3.jpg" class="card-img-top" alt="Spa Retreat">
            <div class="card-body">
              <h5 class="card-title fw-bold text-warning">Relaxing Spa Retreat</h5>
              <p class="card-text">Rejuvenate with massages, sauna, and exclusive wellness treatments.</p>
              <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#offerModal3">View Details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <!-- Offer 1 Modal -->
  <div class="modal fade" id="offerModal1" tabindex="-1" aria-labelledby="offerModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content text-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="offerModal1Label">Luxury Weekend Getaway</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="image/offer1.jpg" class="img-fluid mb-3 rounded" alt="Luxury Stay">
          <p>Indulge in a 2-night escape to a deluxe suite with complimentary breakfast, spa access, and a welcome drink on arrival. Perfect for couples looking for a luxurious and relaxing weekend.</p>
          <ul>
            <li>2-night stay in Deluxe Suite</li>
            <li>Daily Breakfast Included</li>
            <li>Spa Access for Two</li>
            <li>Late Checkout Included</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Offer 2 Modal -->
  <div class="modal fade" id="offerModal2" tabindex="-1" aria-labelledby="offerModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content text-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="offerModal2Label">Gourmet Dining Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="image/offer2.jpg" class="img-fluid mb-3 rounded" alt="Dining Experience">
          <p>Experience the finest flavors with a specially curated 5-course dinner by award-winning chefs. Enjoy wine pairings and a stunning ambiance in our exclusive dining area.</p>
          <ul>
            <li>5-Course Gourmet Dinner</li>
            <li>Complimentary Wine Pairing</li>
            <li>Private Candlelight Setup</li>
            <li>Live Music Entertainment</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Offer 3 Modal -->
  <div class="modal fade" id="offerModal3" tabindex="-1" aria-labelledby="offerModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content text-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="offerModal3Label">Relaxing Spa Retreat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="image/offer3.jpg" class="img-fluid mb-3 rounded" alt="Spa Retreat">
          <p>Rejuvenate your mind and body with our spa retreat package. Enjoy signature massages, detox treatments, and unlimited sauna access for a blissful escape.</p>
          <ul>
            <li>Full Body Aromatherapy Massage</li>
            <li>Detox Facial & Body Scrub</li>
            <li>Unlimited Sauna & Jacuzzi Access</li>
            <li>Herbal Tea & Relaxation Lounge</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
