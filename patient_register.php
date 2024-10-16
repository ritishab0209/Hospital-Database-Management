<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Healthcare Database</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #202b38;
        background-image: url("images/hbg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
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

      .container {
        width: 370px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 1);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        color: rgb(0, 242, 137);
        margin-top: 20px;
        text-align: center;
      }

      .button-container {
        margin-top: 20px;
      }

      form {
        display: flex;
        flex-direction: column;
      }

      h1 {
        font-size: 40px;
        text-align: center;
        margin-top: 10px;
        color: white; /* Added color for better visibility */
      }

      .logo {
        width: 80px;
        height: 80px;
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
      }

      button {
        padding: 10px;
        background-color: rgba(1, 110, 36, 0.8);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-family: sans-serif;
      }

      button:hover {
        background-color: #0056b3;
      }

      .registration-link {
        margin-top: 10px;
        font-family: "Times New Roman", Times, serif;
        color: green;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <img src="images/logo1.png" alt="Logo" class="logo" />
      <span class="navbar-title">GLOBAL CARE</span>
    </nav>

    <!-- Patient Registration Form -->
    <div class="container">
      <div id="message"></div>
      <form
        id="registerForm"
        action="patient_register_conn.php"
        method="post"
        enctype="multipart/form-data"
      >
        <h2>Patient Registration</h2>

        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Password (JPG):</label>
        <input
          type="file"
          id="password"
          name="password"
          accept=".jpg"
          required
        />

        <label for="confirm_password">Confirm Password (JPG):</label>
        <input
          type="file"
          id="confirm_password"
          name="confirm_password"
          accept=".jpg"
          required
        />

        <button type="submit">Register</button>
      </form>
      <a href="index.html">Back to login</a>
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
  </body>
</html>
