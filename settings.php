<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings - Global Care</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style>
      body {
        background-color: #f8f9fa;
      }
      .navbar {
        background-color: rgb(135, 243, 135);
        height: 70px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
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
        border-right: 1px solid rgba(0, 0, 0, 0.1);
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
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        <img
          style="width: 50px; height: 50px"
          src="images/logo.png"
          alt="Logo"
          class="logo"
        />
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
            <img
              style="width: 100px; height: 100px"
              src="images/doctor_avatar.jpg"
              alt="Doctor Avatar"
            />
            <h6>Dr. John Doe</h6>
          </div>
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="doctor_dashboard.html"
                  ><i class="fas fa-tachometer-alt"></i> Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.html"
                  ><i class="fas fa-user"></i> Profile</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="appointments.html"
                  ><i class="fas fa-calendar-alt"></i> Appointments</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patients.html"
                  ><i class="fas fa-user-friends"></i> Patients</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payments.html"
                  ><i class="fas fa-credit-card"></i> Payments</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="analytics.html"
                  ><i class="fas fa-chart-line"></i> Analytics & Reports</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications.html"
                  ><i class="fas fa-bell"></i> Notifications</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="settings.html"
                  ><i class="fas fa-cog"></i> Settings</a
                >
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-10 ml-sm-auto px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Settings</h1>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card mb-3">
                <div class="card-header">Profile Settings</div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        placeholder="Enter username"
                      />
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter email"
                      />
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="Enter new password"
                      />
                    </div>
                    <div class="form-group">
                      <label for="confirm-password">Confirm Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="confirm-password"
                        placeholder="Confirm password"
                      />
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Update Profile
                    </button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-3">
                <div class="card-header">Notification Settings</div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="email-notifications"
                        >Email Notifications</label
                      >
                      <select class="form-control" id="email-notifications">
                        <option>Enabled</option>
                        <option>Disabled</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sms-notifications">SMS Notifications</label>
                      <select class="form-control" id="sms-notifications">
                        <option>Enabled</option>
                        <option>Disabled</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Save Settings
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-header">Account Settings</div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="language">Language</label>
                      <select class="form-control" id="language">
                        <option>English</option>
                        <option>Spanish</option>
                        <option>Hindi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="timezone">Timezone</label>
                      <select class="form-control" id="timezone">
                        <option>(GMT+5:30) India Standard Time</option>
                        <option>(GMT-5:00) Eastern Standard Time</option>
                        <option>(GMT+1:00) Central European Time</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Update Account Settings
                    </button>
                  </form>
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
