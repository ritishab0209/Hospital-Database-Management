<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Global Care</title>
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Additional styles specific to the login page */
    body {
      background-color: #202b38;
      color: aliceblue;
    }
    .login-container {
      width: 300px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 1);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin: 100px auto; /* Centers the login form */
    }
    input[type="file"] {
      /* Adjust styles for the file input */
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
    }
    button[type="submit"] {
      /* Adjust button styles */
      padding: 10px;
      background-color: rgba(1, 110, 36, 0.8);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 100%;
      box-sizing: border-box;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Top Navbar -->
  <header class="navbar navbar-expand-md navbar-light bg-lightgreen sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/logo1.png" alt="Logo" class="logo" />
        <span class="navbar-title mx-auto" style="display:inline;margin-top: 0%;">Global Care</span>
      </a>
    </div>
  </header>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="login-container">
          <form>
            <h2 class="text-center">Login</h2>

            <label for="name">Name :</label>
            <input type="text" id="name" name="name" />

            <label for="password">Password :</label>
            <input type="file" id="password" name="password" accept="image/*" />

            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Required scripts remain the same -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
