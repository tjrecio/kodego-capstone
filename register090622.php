<?php

require_once 'config.php';

// $username = $storeID = $password = $confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["username"]) && !empty($_POST["storeID"]) && !empty($_POST["password"])) {

    if ($_POST["password"] == $_POST["confirmpassword"]) {

      $sql = "INSERT INTO users090822 (storeID, username, password) VALUES (?,?,?)";

      if ($stmt = mysqli_prepare($link, $sql)) {
        $param_storeID = $_POST["storeID"];
        $param_username = $_POST["username"];
        $param_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $param_storeID, $param_username, $param_password);

        if (mysqli_stmt_execute($stmt)) {
          // header("location: login090622.php");
        }else{
          $errormessage = "Username already exists!";
        }
        mysqli_stmt_close($stmt);
      }
    } else {
      $errormessage = "Passwords entered do not match. Try again.";
    }
  } else {
    $errormessage = "Some fields are empty. Try again.";
  }
  mysqli_close($link);
}

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
  <title>Register - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'header.php' ?>

    <div id="main">

      <form id="formMain" method="POST" action="register090622.php">
        <div>
          <p style="font-size: 30px; margin:0px;"><b>Create an account</b></p>
          <p style="font-size: 12px; margin:0px; margin-bottom: 20px;">Fill in the fields below to create your account.</p>
        </div>

        <div id="userInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-user"></i>&nbspUser</div>
          <div><input class="inputBox" type="text" name="username"></div>
        </div>
        <br>
        <div id="LicInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-store"></i>&nbspDrugstore License Number</div>
          <p style="font-size: 11px; margin:0px; margin-bottom: 0px;">Enter your Drugstore's unique 16- to 18-digit CDRR or 17-digit License-To-Operate (LTO) number provided by the FDA.</p>
          <div><input class="inputBox" type="text" name="storeID" placeholder=" ex. CDRR-NCR-DS-12345678"></div>
        </div>
        <br>
        <div id="passwordInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-lock"></i>&nbspPassword</div>
          <div><input class="inputBox" type="text" name="password"></div>
        </div>
        <br>
        <div id="passwordInput">
          <div style="font-size: 80%;"><i class="fa-solid fa-lock"></i>&nbspConfirm Password</div>
          <div><input class="inputBox" type="text" name="confirmpassword"></div>
        </div>
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

  </div>
</body>

</html>