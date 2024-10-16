<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Change Picture - Healthcare Database</title>
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
            position: relative;
        }

        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 0;
            left: 0;
        }

        .navbar-title {
            font-size: 60px;
            color: #400085;
            margin-left: 10px;
            font-family: "Times New Roman", Times, serif;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .container {
            width: 370px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            color: rgb(0, 242, 137);
            margin-top: 120px;
            position: relative;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: rgba(1, 110, 36, 0.8);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="images/logo.png" alt="Logo" class="logo" />
        <span class="navbar-title">GLOBAL CARE</span>
    </nav>

    <div class="container">
        <form action="process_change_picture.php" method="post" enctype="multipart/form-data">
            <h2>Change Picture</h2>

            <label for="old_password">Old Picture:</label>
            <input type="file" id="old_password" name="old_password" accept=".jpg" required />

            <label for="new_password">New Picture:</label>
            <input type="file" id="new_password" name="new_password" accept=".jpg" required />

            <label for="confirm_password">Confirm New Picture:</label>
            <input type="file" id="confirm_password" name="confirm_password" accept=".jpg" required />

            <button type="submit">Change Picture</button>
            <a
          href="index.html"
          style="color: blue; font-family: 'Times New Roman', Times, serif"
          >back to Home</a
        >
        </form>
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
