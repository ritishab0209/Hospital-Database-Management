<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Care Admin Dashboard</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header
      class="navbar navbar-expand-md navbar-light bg-lightgreen sticky-top"
    >
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/logo.png" alt="Logo" class="logo" />
        <span class="navbar-title mx-auto">Global Care</span>
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
                src="images/admin-profile.png"
                alt="Admin Profile"
                class="rounded-circle"
                width="50"
              />
              <p class="mt-2">Welcome<br />MR. Admin</p>
            </div>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#"
                  ><i class="fas fa-tachometer-alt"></i> Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.php"
                  ><i class="fas fa-user-md"></i> Doctor</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patients.php"
                  ><i class="fas fa-user"></i> Patient</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_department.html"
                  ><i class="fas fa-building"></i> Department</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule.html"
                  ><i class="fas fa-calendar-alt"></i> Schedule</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="appointments.html"
                  ><i class="fas fa-calendar-check"></i> Appointment</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payments.html"
                  ><i class="fas fa-money-check-alt"></i> Payment</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_report.html"
                  ><i class="fas fa-file-alt"></i> Report</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="beds.html"
                  ><i class="fas fa-bed"></i> Bed Manager</a
                >
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2 text-center w-100">Dashboard</h1>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Active Doctors</h5>
                  <p class="card-text">9</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Active Patients</h5>
                  <p class="card-text">11</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Pharmacist</h5>
                  <p class="card-text">3</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Laboratorist</h5>
                  <p class="card-text">1</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Accountant</h5>
                  <p class="card-text">2</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Receptionist</h5>
                  <p class="card-text">4</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-header">Calendar</div>
                <div class="card-body">
                  <div id="calendar">
                    <div
                      id="calendar"
                      style="width: 400px; height: 400px"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
              <span class="text-muted">
                <strong style="text-align: center">Global Care Hospital</strong
                ><br />
                Address: 123 Main St, Bangalore Karnataka,572131<br />
                About Us: We provide top-notch healthcare services.<br />
                Contact Us: contact@globalcare.com
              </span>
            </div>
          </footer>
        </main>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get("message");
        if (message) {
          alert(message);
        }
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>
