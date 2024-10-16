<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__ . "/database.php";
    $sql = sprintf("SELECT * FROM user WHERE name = '%s'",
            $mysqli->real_escape_string($_POST["name"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    var_dump($user);
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"
    />
    <style>
      body {
        background-image: url("images/bg.jpg");
        background-repeat: no-repeat;
        background-position: 12px 11px;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post">
    <label for="name">Name :</label>
    <input type="text" id="name" name="name" />

    <label for="password">Password :</label>
    <input type="password" id="password" name="password" />
    <button>Log in</button>
    </form>
    </body>
    </html>