

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hospitality Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<html>
<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3 h-font" href="#">The Tranquil Escape</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.html">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilites</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
       
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
             Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
             Register
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="#">
            <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex align-items-center" >
            <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h1>
        <button type="reset shadow-none" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="mb-4">
                <label >Email address</label>
                <input type="email" class="form-control shadow-none" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
             <div class="mb-4">
                <label >Password</label>
                <input type="password" class="form-control shadow-none" placeholder="Password" >
             </div>
             <div class="mb-3 d-flex justify-content-between">
                <button type="submit" class="btn btn-dark">Login</button>
                <href="javascript: void(0)">Forgot Password?</a>
      </div>
      </div >
</form>
    </div>
  </div>
</div>

<!-- Register Modal -->
 
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h1 class="modal-title fs-5 d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Register
          </h1>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <span class="badge badge-light rounded-pill bg-light text-dark mb-3 lh-base">
            Note: Your details must match with your ID (Aadhar, PAN, Passport, etc.) for verification.
          </span>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 mb-4 ps-0">
                <label>Name</label>
                <input type="text" class="form-control shadow-none" placeholder="Name">
              </div>

              <div class="col-md-6 mb-4 p-0">
                <label>Email</label>
                <input type="email" class="form-control shadow-none" placeholder="Email">
              </div>

              <div class="col-md-6 mb-4 ps-0">
                <label>Phone Number</label>
                <input type="number" class="form-control shadow-none" placeholder="Phone number">
              </div>

              <div class="col-md-6 mb-4 p-0">
                <label>Photo</label>
                <input type="file" class="form-control shadow-none">
              </div>

              <div class="col-md-6 mb-4 ps-0">
                <label>Date Of Birth</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-md-6 mb-4 p-0">
                <label>Pincode</label>
                <input type="number" class="form-control shadow-none" placeholder="Pincode">
              </div>

              
              <div class="col-md-12 mb-4 ps-0 >
                <label>Address</label>
                <textarea class="form-control shadow-none" placeholder="Address" rows="3" ></textarea>
              </div>

            <div class="col-md-6 mb-4 ps-0">
                <label>Password</label>
                <input type="password" class="form-control shadow-none" placeholder="Password">
              </div>

              <div class="col-md-6 mb-4 p-0">
                <label>Confirm Password</label>
                <input type="password" class="form-control shadow-none" placeholder="Confirm Password">
              </div>


            </div>
          </div>
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn btn-dark shadow-none">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

</html>