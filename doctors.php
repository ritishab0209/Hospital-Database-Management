<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Doctors - Global Care</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Adjust form and card styles */
      .card-body {
        padding: 1rem;
      }
      .form-group {
        margin-bottom: 0.75rem; /* Reduce margin between form groups */
      }
    </style>
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
            <!-- Sidebar content remains the same for navigation -->

            <!-- Add link for Dashboard -->
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="admin_page.php"
                  ><i class="fas fa-tachometer-alt"></i> Dashboard</a
                >
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Manage Doctors</h1>
          </div>

          <!-- Register Doctor Button -->
          <button
            type="button"
            class="btn btn-primary mb-3"
            id="registerDoctorBtn"
          >
            Register a Doctor
          </button>

          <!-- Add Doctor Form Section (Initially hidden) -->
          <div
            class="card mb-4"
            id="addDoctorFormContainer"
            style="display: none"
          >
            <div class="card-header">Add Doctor</div>
            <div class="card-body">
              <form id="addDoctorForm" action="doctor_register_conn.php"
        method="post"
        enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="doctorName">Doctor Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="doctorName"
                      name="doctorName"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="specialization">Specialization</label>
                    <select
                      class="form-control"
                      id="specialization"
                      name="specialization"
                      required
                    >
                      <option value="">Select Specialization</option>
                      <option value="cardiologist">Cardiologist</option>
                      <option value="psychiatrist">Psychiatrist</option>
                      <option value="surgeon">Surgeon</option>
                      <option value="neurologist">Neurologist</option>
                      <option value="pediatrics">Pediatrics</option>
                      <option value="physiotherapist">Physiotherapist</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6">
                  <label for="password">Password (JPG):</label>
        <input
          type="file"
          id="password"
          name="password"
          accept=".jpg"
          required
        />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="available">Available</label>
                    <select
                      class="form-control"
                      id="available"
                      name="available"
                      required
                    >
                      <option value="true">Yes</option>
                      <option value="false">No</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="salary">Salary</label>
                    <input
                      type="number"
                      class="form-control"
                      id="salary"
                      name="salary"
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="experience">Experience</label>
                  <input
                    type="number"
                    class="form-control"
                    id="experience"
                    name="experience"
                    required
                  />
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                  Add Doctor
                </button>
              </form>
            </div>
          </div>

          <!-- Doctor Table Section -->
          <div class="card">
            <div class="card-header">
              <strong>Doctor Table</strong>
            </div>
            <div class="card-body"> 
            <table class="table table-striped">
                <thead>
                <?php
                
                    include 'doctor_display_conn.php';
                  ?>
                </thead>
                <tbody id="patientTableBody">
                  <!-- Patient table rows will be dynamically added here -->
                </tbody>
              </table>
                  <!-- Doctor table rows will be dynamically added here -->
            </div>
          </div>

          <!-- Footer section remains the same -->
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

    <!-- Required scripts remain the same -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <script>
      // JavaScript to handle showing/hiding the Add Doctor form
      document.addEventListener("DOMContentLoaded", function () {
        const registerDoctorBtn = document.getElementById("registerDoctorBtn");
        const addDoctorFormContainer = document.getElementById(
          "addDoctorFormContainer"
        );

        registerDoctorBtn.addEventListener("click", function () {
          addDoctorFormContainer.style.display = "block";
        });
      });
    </script>
  </body>
</html>
