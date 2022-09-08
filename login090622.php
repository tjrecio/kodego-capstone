<?php

session_start();

require_once "config.php";

//user login check
if (isset($_SESSION["loggedin"])) {
  header("Location: dashboard090622.php");
  exit;
}



// if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $sql = "SELECT storeid, username, password FROM users090822 WHERE username = ?";

  if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $_POST["username"]);

    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {

        mysqli_stmt_bind_result($stmt, $id, $_POST["username"], $password);

        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($_POST["password"], $password)) {

            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $storeid;
            $_SESSION["username"] = $_POST["username"];

            header("Location: dashboard090622.php");
          } else {
            $errormessage = "Invalid username or password.";
          }
        } else {
          $errormessage = "Something went wrong. Try again later.";
        }
        mysqli_stmt_close($stmt);
      } else {
        $errormessage = "User not found.";
      }
    }
  }
  mysqli_close($link);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6e0e3f1ae2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style090622.css">
  <script src="script090422.js"></script>
  <title>Login - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'header.php' ?>

    <div id="main">

      <form id="formMain" method="POST" action="login090622.php">
        <div>
          <p style="font-size: 30px; margin:0px;"><b>Login to your account</b></p>
          <p style="font-size: 12px; margin:0px; margin-bottom: 20px;">Fill in the fields below to sign-in.</p>
        </div>

        <div id="userInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-user"></i>&nbspUser</div>
          <div><input class="inputBox" type="text" name="username"></div>
        </div>
        <br>
        <div id="passwordInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-lock"></i>&nbspPassword</div>
          <div><input class="inputBox" type="text" name="password"></div>
        </div>
        <br>
        <div id="errorSpace">

          <?php
          if (isset($errormessage)) {
            echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
          }
          ?>

        </div>
        <input id="submitBtn" type="submit" name="pass">
      </form>

    </div>

    <?php include 'footer.php' ?>

  </div>
</body>

</html>