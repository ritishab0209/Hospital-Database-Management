<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Health Dashboard - Global Care</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom styling for the navbar */
    .navbar {
      background-color: rgb(135, 243, 135); /* Green color */
      height: 70px; /* Adjusted height */
    }
    .navbar-brand {
      color: #ffffff; /* White text color */
    }
    .navbar-brand img {
      height: 50px; /* Adjust logo height */
      margin-right: 10px; /* Space between logo and text */
    }
    .navbar-title {
      color: #ffffff; /* White text color */
      font-size: 2rem; /* Adjusted font size */
      margin-left: 10px; /* Left margin */
    }
    .navbar .btn-outline-dark {
      color: #000000; /* Black text color */
      border-color: #000000; /* Black border color */
    }
    .navbar .btn-outline-dark:hover {
      color: #ffffff; /* White text color on hover */
      background-color: #000000; /* Black background on hover */
    }

    /* Styling for cards */
    .card {
      border: none; /* Remove default card border */
    }
    .card-header {
      background-color: rgb(135, 243, 135); /* Green color */
      color: #ffffff; /* White header text color */
      font-weight: bold; /* Bold header text */
    }
  </style>
</head>
<body>
  <header class="navbar navbar-expand-md navbar-light sticky-top">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/logo.png" alt="Logo" class="logo">
      <span class="navbar-title">Global Care</span>
    </a>
    <div class="ml-auto">
      <a class="btn btn-outline-dark" href="index.html">Logout</a>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <div class="profile-section text-center my-3">
            <img
              src="images/patient_avatar.png"
              alt="Patient Profile"
              class="rounded-circle"
              width="50"
            />
            <p class="mt-2">Welcome <br> patient</p>
          </div>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patient_profile.html"><i class="fas fa-user"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Patient_appointment.html"><i class="fas fa-user-md"></i> My Appointments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Patient_medical_record.html"><i class="fas fa-notes-medical"></i> My Medical Records</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prescription.html"><i class="fas fa-prescription-bottle-alt"></i> Prescription & Refills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="health_info.html"><i class="fas fa-info-circle"></i> Health Information</a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-10 ml-sm-auto px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">My Health Dashboard</h1>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Next Appointment</div>
              <div class="card-body">
                <h5 class="card-title">Date: August 10, 2024</h5>
                <p class="card-text">Time: 10:00 AM</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">My Medical Records</div>
              <div class="card-body">
                <p class="card-text">View and manage your medical records.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Prescriptions</div>
              <div class="card-body">
                <p class="card-text">View and request prescription refills.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-header">Messages</div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>New message from Dr. Smith</span>
                    <span><a href="#" class="btn btn-sm btn-primary">Read Message</a></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>New prescription available</span>
                    <span><a href="#" class="btn btn-sm btn-primary">View Prescription</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Health Information</div>
              <div class="card-body">
                <p class="card-text">Explore health tips and information.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">
              <strong style="text-align: center">Global Care Hospital</strong><br />
              Address: 123 Main St, Bangalore Karnataka,572131<br />
              About Us: We provide top-notch healthcare services.<br />
              Contact Us: contact@globalcare.com
            </span>
          </div>
        </footer>
      </main>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
