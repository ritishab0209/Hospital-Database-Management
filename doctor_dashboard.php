<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Global Care</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: rgb(135, 243, 135);
      height: 70px;
      border-bottom: 1px solid rgba(0,0,0,0.1);
    }
    .navbar-brand {
      color: #ffffff;
    }
    .navbar-title {
      color: #ffffff;
      font-size: 2rem;
      margin-left: 10px;
    }
    .sidebar {
      background-color: #f8f9fa;
      height: 100vh;
      border-right: 1px solid rgba(0,0,0,0.1);
    }
    .nav-link {
      color: #495057;
    }
    .nav-link:hover {
      color: #007bff;
    }
    .nav-link.active {
      font-weight: bold;
      color: #007bff;
    }
    .card {
      border: none;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #ffffff;
      font-weight: bold;
    }
    footer {
      margin-top: 20px;
    }
    .sidebar-avatar {
      text-align: center;
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <header class="navbar navbar-expand-md navbar-light sticky-top">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img style="width: 50px; height: 50px;" src="images/logo.png" alt="Logo" class="logo">
      <span class="navbar-title">Global Care</span>
    </a>
    <div class="ml-auto">
      <a class="btn btn-outline-dark" href="index.html">Logout</a>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-avatar">
          <img style="width: 100px; height: 100px;" src="images/doctor_avatar.jpg" alt="Doctor Avatar">
          <h6>Dr. John Doe</h6>
        </div>
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="doctor_dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html"><i class="fas fa-user"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patients.html"><i class="fas fa-user-friends"></i> Patients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor_appointments.html"><i class="fas fa-calendar-alt"></i> Appointments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payments.html"><i class="fas fa-credit-card"></i> Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analytics.html"><i class="fas fa-chart-line"></i> Analytics & Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notifications.html"><i class="fas fa-bell"></i> Notifications</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="settings.php"><i class="fas fa-cog"></i> Settings</a>
            </li>-->
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-10 ml-sm-auto px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Total Appointments</div>
              <div class="card-body text-center">
                <h2>45</h2>
                <p>Upcoming appointments</p>
                <a href="doctor_appointments.html" class="btn btn-primary">View Appointments</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Total Patients</div>
              <div class="card-body text-center">
                <h2>150</h2>
                <p>Registered patients</p>
                <a href="patients.html" class="btn btn-primary">View Patients</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">Pending Payments</div>
              <div class="card-body text-center">
                <h2>$500</h2>
                <p>Payments to be processed</p>
                <a href="payments.html" class="btn btn-primary">View Payments</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-header">Recent Appointments</div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">PatientA - 2023-07-20</li>
                  <li class="list-group-item">PatientB - 2023-07-22</li>
                  <li class="list-group-item">PatientC - 2023-07-25</li>
                  <li class="list-group-item">PatientD - 2023-07-27</li>
                </ul>
                <a href="doctor_appointments.html" class="btn btn-primary mt-3">View All Appointments</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-header">Recent Notifications</div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">Appointment reminder for Patient A</li>
                  <li class="list-group-item">New message from Patient B</li>
                  <li class="list-group-item">Payment received from Patient C</li>
                  <li class="list-group-item">Check-up reminder for Patient D</li>
                </ul>
                <a href="notifications.html" class="btn btn-primary mt-3">View All Notifications</a>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer mt-auto py-3">
          <div class="container text-muted">
            <strong>Global Care Hospital</strong><br />
            Address: 123 Main St, Bangalore, Karnataka, 572131<br />
            About Us: We provide top-notch healthcare services.<br />
            Contact Us: contact@globalcare.com
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
