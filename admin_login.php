<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Healthcare Database</title>
    <style>
      /* Reset default margin and padding */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #202b38;
        background-image: url("images/hbg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        position: relative; /* Ensure relative positioning for absolute elements */
      }

      .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100px;
        background-color: #ffffff; /* White background for navbar */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow for navbar */
        position: absolute; /* Fixed position at the top */
        top: 0; /* Align to the top of the viewport */
        left: 0; /* Align to the left */
      }

      .navbar-title {
        font-size: 60px; /* Adjust font size */
        color: #400085; /* Purple color for title */
        margin-left: 10px; /* Space between logo and title */
        font-family: "Times New Roman", Times, serif; /* Font family for title */
      }

      .logo {
        width: 80px; /* Logo width */
        height: 80px; /* Logo height */
        margin-right: 10px; /* Space between logo and title */
      }

      .login-container {
        width: 370px;
        height: 400px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 1);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        color: rgb(0, 242, 137);
        margin-top: 120px; /* Adjusted margin top to create space */
        position: relative; /* Ensure relative positioning for absolute elements */
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px; /* Adjusted margin top for form alignment */
      }

      h2 {
        margin-bottom: 20px;
        text-align: center;
      }

      label {
        margin-bottom: 5px;
        font-weight: bold;
      }

      input {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%; /* Full width input */
        box-sizing: border-box; /* Ensure padding doesn't affect width */
      }

      button {
        padding: 10px;
        background-color: rgba(1, 110, 36, 0.8);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%; /* Full width button */
        box-sizing: border-box; /* Ensure padding doesn't affect width */
      }

      button:hover {
        background-color: #0056b3;
      }

      .button-container {
        position: absolute;
        top: 10px;
        right: 10px;
      }
      
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <img src="images/logo1.png" alt="Logo" class="logo" />
      <span class="navbar-title">GLOBAL CARE</span>
    </nav>

    <div class="login-container">
      <div id="message"></div>
      <form
        action="admin_login_conn.php"
        method="post"
        enctype="multipart/form-data"
      >
        <h2>Admin Login</h2>

        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required />

        <label for="password">Password :</label>
        <input
          type="file"
          id="password"
          name="password"
          accept=".jpg"
          required
        />
        <a href="admin_page.php">
          <button type="submit">Login</button>
        </a>
        <a href="change_picture.php" style="color: green">change picture</a>
      </form>
    </div>

    <!--<script>
      document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get("message");
        if (message) {
          alert(message);
        }
      });
    </script>-->
  </body>
</html>
